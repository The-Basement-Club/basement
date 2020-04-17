<?php

namespace App\Operations;

use DealerInspire\Operations\Operation;

class RunHypervisorLinkAction extends Action
{
    public function run()
    {
        $session = ssh2_connect($this->server->ip_address, "22");
        ssh2_auth_pubkey_file($session, "root", $this->server->ssh_key_private, $this->server->ssh_key_private);

        $localFilePath = storage_path('scripts/' . $this->server->id . '_hypervisor_link.sh');

        file_put_contents($localFilePath, view('basement-scripts.link-hypervisor', [
            'hypervisor' => $this->server,
        ]));

        // Ensure our .basement folder exists
        ssh2_exec($session, "mkdir /root/.basement -f");

        // Create a local copy of our script to make sure it runs like we'd expect.
        ssh2_scp_send($session, $localFilePath, $file = "/root/.basement/link-hypervisor.sh");

        // Make sure the copied file can  be executed
        [$stdErr, $stdOut] = $this->sshAndRunCommandsWithOutput($session, "chmod +x \"$file\"");
        $this->output .= "Standard Out: \n".$stdOut."\n";
        $this->output .= "Standard Error: \n".$stdErr."\n";

        // Run the script
        [$stdErr, $stdOut] = $this->sshAndRunCommandsWithOutput($session, "sh \"$file\"");
        $this->output .= "Standard Out: \n".$stdOut."\n";
        $this->output .= "Standard Error: \n".$stdErr."\n";

        // Remove the script once it runs just for cleanup.
        [$stdErr, $stdOut] = $this->sshAndRunCommandsWithOutput($session, "rm \"$file\"");
        $this->output .= "Standard Out: \n".$stdOut."\n";
        $this->output .= "Standard Error: \n".$stdErr."\n";

        ssh2_disconnect($session);

        $this->save();
    }

    protected function sshAndRunCommandsWithOutput($session, $command)
    {
        $stream = ssh2_exec($session, $command);
        stream_set_blocking($stream, true);

        $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
        $stream_err = ssh2_fetch_stream($stream, SSH2_STREAM_STDERR);

        $stdOut = stream_get_contents($stream_out);
        $stdErr = stream_get_contents($stream_err);

        return [$stdErr, $stdOut];
    }
}
