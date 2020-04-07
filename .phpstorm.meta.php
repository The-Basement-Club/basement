<?php

if (!function_exists('libvirt_connect')) {
    /**
     * This function should be called first to get a connection to the Hypervisor. If necessary, authentication will be performed using supplied credentials.
     * @param string $url URL of the hypervisor to connect to. Can be for example  or .
     * @param bool $readonly If  (default) connection is made readonly.
     * @param array $credentials Credentials to authenticate with. See  for more details.
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect
     */
    function libvirt_connect (string $url = null, bool $readonly = true, array $credentials = array()) {}
}

if (!function_exists('libvirt_connect_get_uri')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_uri
     */
    function libvirt_connect_get_uri ($conn) {}
}

if (!function_exists('libvirt_connect_get_hostname')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_hostname
     */
    function libvirt_connect_get_hostname ($conn) {}
}

if (!function_exists('libvirt_connect_get_hypervisor')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_hypervisor
     */
    function libvirt_connect_get_hypervisor ($conn) {}
}

if (!function_exists('libvirt_connect_get_capabilities')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xpath
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_capabilities
     */
    function libvirt_connect_get_capabilities ($conn, $xpath) {}
}

if (!function_exists('libvirt_connect_get_emulator')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $arch
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_emulator
     */
    function libvirt_connect_get_emulator ($conn, $arch) {}
}

if (!function_exists('libvirt_connect_get_nic_models')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $arch
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_nic_models
     */
    function libvirt_connect_get_nic_models ($conn, $arch) {}
}

if (!function_exists('libvirt_connect_get_soundhw_models')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $arch
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_soundhw_models
     */
    function libvirt_connect_get_soundhw_models ($conn, $arch, $flags) {}
}

if (!function_exists('libvirt_connect_get_maxvcpus')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_maxvcpus
     */
    function libvirt_connect_get_maxvcpus ($conn) {}
}

if (!function_exists('libvirt_connect_get_sysinfo')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_sysinfo
     */
    function libvirt_connect_get_sysinfo ($conn) {}
}

if (!function_exists('libvirt_connect_get_encrypted')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_encrypted
     */
    function libvirt_connect_get_encrypted ($conn) {}
}

if (!function_exists('libvirt_connect_get_secure')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_secure
     */
    function libvirt_connect_get_secure ($conn) {}
}

if (!function_exists('libvirt_connect_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_information
     */
    function libvirt_connect_get_information ($conn) {}
}

if (!function_exists('libvirt_connect_get_machine_types')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_machine_types
     */
    function libvirt_connect_get_machine_types ($conn) {}
}

if (!function_exists('libvirt_connect_get_all_domain_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $stats
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_connect_get_all_domain_stats
     */
    function libvirt_connect_get_all_domain_stats ($conn, $stats, $flags) {}
}

if (!function_exists('libvirt_stream_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_create
     */
    function libvirt_stream_create ($conn) {}
}

if (!function_exists('libvirt_stream_close')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_close
     */
    function libvirt_stream_close ($conn) {}
}

if (!function_exists('libvirt_stream_abort')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_abort
     */
    function libvirt_stream_abort ($conn) {}
}

if (!function_exists('libvirt_stream_finish')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_finish
     */
    function libvirt_stream_finish ($conn) {}
}

if (!function_exists('libvirt_stream_send')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $data
     * @param  $len
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_send
     */
    function libvirt_stream_send ($conn, $data, $len) {}
}

if (!function_exists('libvirt_stream_recv')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $data
     * @param  $len
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_stream_recv
     */
    function libvirt_stream_recv ($conn, $data, $len) {}
}

if (!function_exists('libvirt_domain_new')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $name
     * @param  $arch
     * @param  $memMB
     * @param  $maxmemMB
     * @param  $vcpus
     * @param  $iso
     * @param  $disks
     * @param  $networks
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_new
     */
    function libvirt_domain_new ($conn, $name, $arch, $memMB, $maxmemMB, $vcpus, $iso, $disks, $networks, $flags) {}
}

if (!function_exists('libvirt_domain_new_get_vnc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_new_get_vnc
     */
    function libvirt_domain_new_get_vnc () {}
}

if (!function_exists('libvirt_domain_get_counts')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_counts
     */
    function libvirt_domain_get_counts ($conn) {}
}

if (!function_exists('libvirt_domain_is_persistent')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_is_persistent
     */
    function libvirt_domain_is_persistent ($conn) {}
}

if (!function_exists('libvirt_domain_lookup_by_name')) {
    /**
     * Try to look up a domain on the given hypervisor based on its name.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $name Name of a domain.
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_lookup_by_name
     */
    function libvirt_domain_lookup_by_name (resource $connection, string $name) {}
}

if (!function_exists('libvirt_domain_get_xml_desc')) {
    /**
     * Provide an XML description of the domain. The description may be reused later to relaunch the domain with  or defined with .
     * @param resource $domain Domain resource of domain to get XML description.
     * @param integer $flags Logical OR of any of these flags:
     * @return string
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_xml_desc
     */
    function libvirt_domain_get_xml_desc (resource $domain, integer $flags): string {}
}

if (!function_exists('libvirt_domain_get_disk_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_disk_devices
     */
    function libvirt_domain_get_disk_devices ($conn) {}
}

if (!function_exists('libvirt_domain_get_interface_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_interface_devices
     */
    function libvirt_domain_get_interface_devices ($conn) {}
}

if (!function_exists('libvirt_domain_change_vcpus')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $numCpus
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_change_vcpus
     */
    function libvirt_domain_change_vcpus ($conn, $numCpus, $flags) {}
}

if (!function_exists('libvirt_domain_change_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $allocMem
     * @param  $allocMax
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_change_memory
     */
    function libvirt_domain_change_memory ($conn, $allocMem, $allocMax, $flags) {}
}

if (!function_exists('libvirt_domain_change_boot_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $first
     * @param  $second
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_change_boot_devices
     */
    function libvirt_domain_change_boot_devices ($conn, $first, $second, $flags) {}
}

if (!function_exists('libvirt_domain_disk_add')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $img
     * @param  $dev
     * @param  $type
     * @param  $driver
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_disk_add
     */
    function libvirt_domain_disk_add ($conn, $img, $dev, $type, $driver, $flags) {}
}

if (!function_exists('libvirt_domain_disk_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $dev
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_disk_remove
     */
    function libvirt_domain_disk_remove ($conn, $dev, $flags) {}
}

if (!function_exists('libvirt_domain_nic_add')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $mac
     * @param  $network
     * @param  $model
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_nic_add
     */
    function libvirt_domain_nic_add ($conn, $mac, $network, $model, $flags) {}
}

if (!function_exists('libvirt_domain_nic_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $dev
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_nic_remove
     */
    function libvirt_domain_nic_remove ($conn, $dev, $flags) {}
}

if (!function_exists('libvirt_domain_attach_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_attach_device
     */
    function libvirt_domain_attach_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_detach_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_detach_device
     */
    function libvirt_domain_detach_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_get_info')) {
    /**
     * Extract information about a domain. Note that if the connection used to get the domain is limited only a partial set of the information can be extracted.
     * @param resource $domain Domain resource of domain to get information for.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_info
     */
    function libvirt_domain_get_info (resource $domain): array {}
}

if (!function_exists('libvirt_domain_get_name')) {
    /**
     * Get the public name for that domain
     * @param resource $domain Domain resource of domain to get name of.
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_name
     */
    function libvirt_domain_get_name (resource $domain) {}
}

if (!function_exists('libvirt_domain_get_uuid')) {
    /**
     * Get the UUID for a domain as a binary string. For textual representation use .
     * @param resource $domain Domain resource of domain to get UUID of.
     * @return string
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_uuid
     */
    function libvirt_domain_get_uuid (resource $domain): string {}
}

if (!function_exists('libvirt_domain_get_uuid_string')) {
    /**
     * Get the UUID for a domain as string (i.e. 25ab2490-7c4c-099f-b647-45ff8efa73f6 ). For more information about UUID see RFC4122. For binary representation use .
     * @param resource $domain Domain resource of domain to get UUID of.
     * @return string
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_uuid_string
     */
    function libvirt_domain_get_uuid_string (resource $domain): string {}
}

if (!function_exists('libvirt_domain_get_id')) {
    /**
     * Get the hypervisor ID number for the domain. Is valid only for running domains. For more unique ID use  or . These functions are valid for all domains not only for active ones.
     * @param resource $domain Domain resource of domain to look up. You can get domain resource using various functions (i.e.  or ). Valid only for running (active) domains.
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_id
     */
    function libvirt_domain_get_id (resource $domain) {}
}

if (!function_exists('libvirt_domain_lookup_by_uuid')) {
    /**
     * Try to look up a domain on the given hypervisor based on its UUID (in binary representation).  For lookup based on textual UUID use .
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $uuid UUID of a domain to look up (in binary representation).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_lookup_by_uuid
     */
    function libvirt_domain_lookup_by_uuid (resource $connection, string $uuid) {}
}

if (!function_exists('libvirt_domain_lookup_by_uuid_string')) {
    /**
     * Try to look up a domain on the given hypervisor based on its UUID (in textual representation). For lookup based on binary UUID use .
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $uuid UUID of a domain to look up (in textual representation).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_lookup_by_uuid_string
     */
    function libvirt_domain_lookup_by_uuid_string (resource $connection, string $uuid) {}
}

if (!function_exists('libvirt_domain_lookup_by_id')) {
    /**
     * Try to look up a domain based on the hypervisor ID number. Note that this won't work for inactive domains which have an ID of -1, in that case a lookup based on the Name or UUId need to be done instead.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param integer $iD Hypervisor ID of a domain.
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_lookup_by_id
     */
    function libvirt_domain_lookup_by_id (resource $connection, integer $iD) {}
}

if (!function_exists('libvirt_domain_create')) {
    /**
     * Launch a defined domain. If the call succeed the domain moves from the defined to the running domains pools.
     * @param resource $domain Domain resource of domain to be launched. You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_create
     */
    function libvirt_domain_create (resource $domain) {}
}

if (!function_exists('libvirt_domain_destroy')) {
    /**
     * Destroy the domain object. The running instance is shutdown if not down already and all resources used by it are given back to the hypervisor. This function may require privileged access.
     * @param resource $domain Domain resource of domain to be destroyed. You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_destroy
     */
    function libvirt_domain_destroy (resource $domain) {}
}

if (!function_exists('libvirt_domain_resume')) {
    /**
     * Resume an suspended domain, the process is restarted from the state where it was frozen by calling . This function may requires privileged access
     * @param resource $domain Domain resource of domain to resume.You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_resume
     */
    function libvirt_domain_resume (resource $domain) {}
}

if (!function_exists('libvirt_domain_core_dump')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $to
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_core_dump
     */
    function libvirt_domain_core_dump ($conn, $to) {}
}

if (!function_exists('libvirt_domain_shutdown')) {
    /**
     * Shutdown a domain, the domain object is still usable there after but the domain OS is being stopped. Note that the guest OS may ignore the request.
     * @param resource $domain Domain resource of domain to shutdown.You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_shutdown
     */
    function libvirt_domain_shutdown (resource $domain) {}
}

if (!function_exists('libvirt_domain_suspend')) {
    /**
     * Suspends an active domain, the process is frozen without further access to CPU resources and I/O but the memory used by the domain at the hypervisor level will stay allocated. Use  to reactivate the domain. This function may requires privileged access.
     * @param resource $domain Domain resource of domain to suspend.You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_suspend
     */
    function libvirt_domain_suspend (resource $domain) {}
}

if (!function_exists('libvirt_domain_managedsave')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_managedsave
     */
    function libvirt_domain_managedsave ($conn) {}
}

if (!function_exists('libvirt_domain_undefine')) {
    /**
     * Undefine a domain but does not stop it if it is running.
     * @param resource $domain Domain resource of domain to undefine.You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_undefine
     */
    function libvirt_domain_undefine (resource $domain) {}
}

if (!function_exists('libvirt_domain_reboot')) {
    /**
     * Reboot a domain, the domain object is still usable there after but the domain OS is being stopped for a restart. Note that the guest OS may ignore the request.
     * @param resource $domain Domain resource of domain to reboot.You can get domain resource using various functions (i.e.  or ).
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_reboot
     */
    function libvirt_domain_reboot (resource $domain) {}
}

if (!function_exists('libvirt_domain_define_xml')) {
    /**
     * Define a domain, but does not start it. This definition is persistent, until explicitly undefined with . The domain is defined using XML description provided.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $xml XML description of the domain. For more details see
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_define_xml
     */
    function libvirt_domain_define_xml (resource $connection, string $xml) {}
}

if (!function_exists('libvirt_domain_create_xml')) {
    /**
     * Launch a new guest domain, based on an XML description similar to the one returned by . This function may requires privileged access to the hypervisor. The domain is not persistent, so its definition will disappear when it is destroyed, or if the host is restarted (see  to define persistent domains).
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $xml XML description of the domain. For more details see
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_create_xml
     */
    function libvirt_domain_create_xml (resource $connection, string $xml) {}
}

if (!function_exists('libvirt_domain_xml_from_native')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $format
     * @param  $configData
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_xml_from_native
     */
    function libvirt_domain_xml_from_native ($conn, $format, $configData) {}
}

if (!function_exists('libvirt_domain_xml_to_native')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $format
     * @param  $xmlData
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_xml_to_native
     */
    function libvirt_domain_xml_to_native ($conn, $format, $xmlData) {}
}

if (!function_exists('libvirt_domain_memory_peek')) {
    /**
     * This function allows you to read the contents of a domain's memory. The memory which is read is controlled by the 'start', 'size' and 'flags' parameters. If 'flags' is  then the 'start' and 'size' parameters are interpreted as virtual memory addresses for whichever task happens to be running on the domain at the moment. Although this sounds haphazard it is in fact what you want in order to read Linux kernel state, because it ensures that pointers in the kernel image can be interpreted coherently. 'buffer' is the return buffer and must be at least 'size' bytes. 'size' may be 0 to test if the call would succeed. NB. The remote driver imposes a 64K byte limit on 'size'. For your program to be able to work reliably over a remote connection you should split large requests to <= 65536 bytes.
     * @param resource $domain
     * @param integer $start
     * @param integer $size
     * @param integer $flags
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_memory_peek
     */
    function libvirt_domain_memory_peek (resource $domain, integer $start, integer $size, integer $flags) {}
}

if (!function_exists('libvirt_domain_memory_stats')) {
    /**
     * This function provides memory statistics for the domain. Up to  elements will be populated in the returned array with memory statistics from the domain. Only statistics supported by the domain, the driver, and this version of libvirt will be returned. The array is indexed by the numerical values of appropriate constants.
     * @param resource $domain Domain resource of domain to get memory stats.
     * @param integer $flags unused, always pass 0 (or ommit the parameter as 0 is default value
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_memory_stats
     */
    function libvirt_domain_memory_stats (resource $domain, integer $flags): array {}
}

if (!function_exists('libvirt_domain_set_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $memory
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_set_memory
     */
    function libvirt_domain_set_memory ($conn, $memory) {}
}

if (!function_exists('libvirt_domain_set_max_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $memory
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_set_max_memory
     */
    function libvirt_domain_set_max_memory ($conn, $memory) {}
}

if (!function_exists('libvirt_domain_set_memory_flags')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $memory
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_set_memory_flags
     */
    function libvirt_domain_set_memory_flags ($conn, $memory, $flags) {}
}

if (!function_exists('libvirt_domain_block_commit')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res
     * @param  $disk
     * @param  $base
     * @param  $top
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_commit
     */
    function libvirt_domain_block_commit ($res, $disk, $base, $top) {}
}

if (!function_exists('libvirt_domain_block_stats')) {
    /**
     * This function returns block device (disk) stats for block devices attached to the domain. The path parameter is the name of the block device. Domains may have more than one block device. To get stats for each you should make multiple calls to this function. Individual fields within the stats structure may be returned as -1, which indicates that the hypervisor does not support that particular statistic.
     * @param resource $domain Domain resource of domain the block device is attached to
     * @param string $path Path to the block device, i.e. "hda"
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_stats
     */
    function libvirt_domain_block_stats (resource $domain, string $path): array {}
}

if (!function_exists('libvirt_domain_block_resize')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $path
     * @param  $size
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_resize
     */
    function libvirt_domain_block_resize ($conn, $path, $size, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $dom
     * @param  $disk
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_job_info
     */
    function libvirt_domain_block_job_info ($dom, $disk, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_abort')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $path
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_job_abort
     */
    function libvirt_domain_block_job_abort ($conn, $path, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_set_speed')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $path
     * @param  $bandwidth
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_block_job_set_speed
     */
    function libvirt_domain_block_job_set_speed ($conn, $path, $bandwidth, $flags) {}
}

if (!function_exists('libvirt_domain_interface_addresses')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $domain
     * @param  $source
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_interface_addresses
     */
    function libvirt_domain_interface_addresses ($domain, $source) {}
}

if (!function_exists('libvirt_domain_interface_stats')) {
    /**
     * This function returns network interface stats for interfaces attached to the domain. The path parameter is the name of the network interface. Domains may have more than one network interface. To get stats for each you should make multiple calls to this function. Individual fields within the stats structure may be returned as -1, which indicates that the hypervisor does not support that particular statistic.
     * @param resource $domain Domain resource of domain the interface is attached to
     * @param string $path Path to the interface, i.e. "vnet1"
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_interface_stats
     */
    function libvirt_domain_interface_stats (resource $domain, string $path): array {}
}

if (!function_exists('libvirt_domain_get_connect')) {
    /**
     * Returns the connection resource for a domain.
     * @param resource $domain Domain resource of domain to get connection resource.
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_connect
     */
    function libvirt_domain_get_connect (resource $domain) {}
}

if (!function_exists('libvirt_domain_migrate')) {
    /**
     * Performs migration of the domain from one host to another. For description of parameters and flags see .
     * @param resource $domain
     * @param resource $dconn
     * @param integer $flags
     * @param string $dname
     * @param string $uri
     * @param integer $bandwith
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_migrate
     */
    function libvirt_domain_migrate (resource $domain, resource $dconn, integer $flags, string $dname, string $uri, integer $bandwith) {}
}

if (!function_exists('libvirt_domain_migrate_to_uri')) {
    /**
     * Performs migration of the domain from one host to another. For description of parameters and flags see .
     * @param resource $domain
     * @param string $dconnuri
     * @param string $miguri
     * @param string $dxml
     * @param integer $flags
     * @param string $dname
     * @param string $uri
     * @param integer $bandwith
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_migrate_to_uri
     */
    function libvirt_domain_migrate_to_uri (resource $domain, string $dconnuri, string $miguri, string $dxml, integer $flags, string $dname, string $uri, integer $bandwith) {}
}

if (!function_exists('libvirt_domain_migrate_to_uri2')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res
     * @param  $dconnUri
     * @param  $migUri
     * @param  $dxml
     * @param  $flags
     * @param  $dname
     * @param  $bandwidth
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_migrate_to_uri2
     */
    function libvirt_domain_migrate_to_uri2 ($res, $dconnUri, $migUri, $dxml, $flags, $dname, $bandwidth) {}
}

if (!function_exists('libvirt_domain_get_job_info')) {
    /**
     * Extract information about progress of a background job on a domain. Will return an error if the domain is not active. For exact description of returned values see .
     * @param resource $domain Domain resource of domain to get job information of
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_job_info
     */
    function libvirt_domain_get_job_info (resource $domain): array {}
}

if (!function_exists('libvirt_domain_xml_xpath')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res
     * @param  $xpath
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_xml_xpath
     */
    function libvirt_domain_xml_xpath ($res, $xpath, $flags) {}
}

if (!function_exists('libvirt_domain_get_block_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res
     * @param  $dev
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_block_info
     */
    function libvirt_domain_get_block_info ($res, $dev) {}
}

if (!function_exists('libvirt_domain_get_network_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res
     * @param  $mac
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_network_info
     */
    function libvirt_domain_get_network_info ($res, $mac) {}
}

if (!function_exists('libvirt_domain_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_autostart
     */
    function libvirt_domain_get_autostart ($conn) {}
}

if (!function_exists('libvirt_domain_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_set_autostart
     */
    function libvirt_domain_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_get_metadata')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $type
     * @param  $uri
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_metadata
     */
    function libvirt_domain_get_metadata ($conn, $type, $uri, $flags) {}
}

if (!function_exists('libvirt_domain_set_metadata')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $type
     * @param  $metadata
     * @param  $key
     * @param  $uri
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_set_metadata
     */
    function libvirt_domain_set_metadata ($conn, $type, $metadata, $key, $uri, $flags) {}
}

if (!function_exists('libvirt_domain_is_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_is_active
     */
    function libvirt_domain_is_active ($conn) {}
}

if (!function_exists('libvirt_domain_get_next_dev_ids')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_next_dev_ids
     */
    function libvirt_domain_get_next_dev_ids ($conn) {}
}

if (!function_exists('libvirt_domain_get_screenshot')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $server
     * @param  $scancode
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_screenshot
     */
    function libvirt_domain_get_screenshot ($conn, $server, $scancode) {}
}

if (!function_exists('libvirt_domain_get_screenshot_api')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $screenID
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_screenshot_api
     */
    function libvirt_domain_get_screenshot_api ($conn, $screenID) {}
}

if (!function_exists('libvirt_domain_get_screen_dimensions')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $server
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_get_screen_dimensions
     */
    function libvirt_domain_get_screen_dimensions ($conn, $server) {}
}

if (!function_exists('libvirt_domain_send_keys')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $server
     * @param  $scancode
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_send_keys
     */
    function libvirt_domain_send_keys ($conn, $server, $scancode) {}
}

if (!function_exists('libvirt_domain_send_key_api')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $codeset
     * @param  $holdime
     * @param  $keycodes
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_send_key_api
     */
    function libvirt_domain_send_key_api ($conn, $codeset, $holdime, $keycodes, $flags) {}
}

if (!function_exists('libvirt_domain_send_pointer_event')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $server
     * @param  $posX
     * @param  $poxY
     * @param  $clicked
     * @param  $release
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_send_pointer_event
     */
    function libvirt_domain_send_pointer_event ($conn, $server, $posX, $poxY, $clicked, $release) {}
}

if (!function_exists('libvirt_domain_update_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_update_device
     */
    function libvirt_domain_update_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_qemu_agent_command')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $cmd
     * @param  $timeout
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_qemu_agent_command
     */
    function libvirt_domain_qemu_agent_command ($conn, $cmd, $timeout, $flags) {}
}

if (!function_exists('libvirt_list_domains')) {
    /**
     * This function returns array of domain resources for all domains defined and/or running on the hypervisor.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_domains
     */
    function libvirt_list_domains (resource $connection): array {}
}

if (!function_exists('libvirt_list_domain_resources')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_domain_resources
     */
    function libvirt_list_domain_resources ($conn) {}
}

if (!function_exists('libvirt_list_active_domain_ids')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_active_domain_ids
     */
    function libvirt_list_active_domain_ids ($conn) {}
}

if (!function_exists('libvirt_list_active_domains')) {
    /**
     * Get the list of active domains. Their hypervisor IDs are returned. You can use  to get domain resource from hypervisor ID.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_active_domains
     */
    function libvirt_list_active_domains (resource $connection): array {}
}

if (!function_exists('libvirt_list_inactive_domains')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_inactive_domains
     */
    function libvirt_list_inactive_domains ($conn) {}
}

if (!function_exists('libvirt_domain_has_current_snapshot')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_has_current_snapshot
     */
    function libvirt_domain_has_current_snapshot ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_lookup_by_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $name
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_snapshot_lookup_by_name
     */
    function libvirt_domain_snapshot_lookup_by_name ($conn, $name, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_snapshot_create
     */
    function libvirt_domain_snapshot_create ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_get_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_snapshot_get_xml
     */
    function libvirt_domain_snapshot_get_xml ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_revert')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_snapshot_revert
     */
    function libvirt_domain_snapshot_revert ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_domain_snapshot_delete
     */
    function libvirt_domain_snapshot_delete ($conn, $flags) {}
}

if (!function_exists('libvirt_list_domain_snapshots')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_domain_snapshots
     */
    function libvirt_list_domain_snapshots ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_name')) {
    /**
     * This function returns the storagepool resource for the given name.
     * @param resource $connection Connection resource of hypervisor.
     * @param string $storagepoolName Name of a storagepool
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_lookup_by_name
     */
    function libvirt_storagepool_lookup_by_name (resource $connection, string $storagepoolName) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_volume')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_lookup_by_volume
     */
    function libvirt_storagepool_lookup_by_volume ($conn) {}
}

if (!function_exists('libvirt_storagepool_list_volumes')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_list_volumes
     */
    function libvirt_storagepool_list_volumes ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_info')) {
    /**
     * This function returns array containing storagepool information
     * @param resource $connection Connection resource of storagepool
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_info
     */
    function libvirt_storagepool_get_info (resource $connection): array {}
}

if (!function_exists('libvirt_storagepool_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_uuid_string
     */
    function libvirt_storagepool_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_name
     */
    function libvirt_storagepool_get_name ($conn) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $uuid
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_lookup_by_uuid_string
     */
    function libvirt_storagepool_lookup_by_uuid_string ($conn, $uuid) {}
}

if (!function_exists('libvirt_storagepool_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xpath
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_xml_desc
     */
    function libvirt_storagepool_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_storagepool_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_define_xml
     */
    function libvirt_storagepool_define_xml ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_storagepool_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_undefine
     */
    function libvirt_storagepool_undefine ($conn) {}
}

if (!function_exists('libvirt_storagepool_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_create
     */
    function libvirt_storagepool_create ($conn) {}
}

if (!function_exists('libvirt_storagepool_destroy')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_destroy
     */
    function libvirt_storagepool_destroy ($conn) {}
}

if (!function_exists('libvirt_storagepool_is_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_is_active
     */
    function libvirt_storagepool_is_active ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_volume_count')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_volume_count
     */
    function libvirt_storagepool_get_volume_count ($conn) {}
}

if (!function_exists('libvirt_storagepool_refresh')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_refresh
     */
    function libvirt_storagepool_refresh ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_set_autostart
     */
    function libvirt_storagepool_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_get_autostart
     */
    function libvirt_storagepool_get_autostart ($conn) {}
}

if (!function_exists('libvirt_storagepool_build')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_build
     */
    function libvirt_storagepool_build ($conn) {}
}

if (!function_exists('libvirt_storagepool_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagepool_delete
     */
    function libvirt_storagepool_delete ($conn) {}
}

if (!function_exists('libvirt_storagevolume_lookup_by_name')) {
    /**
     * This function returns the volume resource for the given name.
     * @param resource $connection Connection resource of the storagepool.
     * @param string $volumeName Name of a volume
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_lookup_by_name
     */
    function libvirt_storagevolume_lookup_by_name (resource $connection, string $volumeName) {}
}

if (!function_exists('libvirt_storagevolume_lookup_by_path')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $path
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_lookup_by_path
     */
    function libvirt_storagevolume_lookup_by_path ($conn, $path) {}
}

if (!function_exists('libvirt_storagevolume_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_get_name
     */
    function libvirt_storagevolume_get_name ($conn) {}
}

if (!function_exists('libvirt_storagevolume_get_path')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_get_path
     */
    function libvirt_storagevolume_get_path ($conn) {}
}

if (!function_exists('libvirt_storagevolume_get_info')) {
    /**
     * This function returns array containing volume information
     * @param resource $volumeResource Connection resource of volume
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_get_info
     */
    function libvirt_storagevolume_get_info (resource $volumeResource): array {}
}

if (!function_exists('libvirt_storagevolume_get_xml_desc')) {
    /**
     * This function returns string containing volume information in XML format
     * @param resource $volumeResource Connection resource of volume
     * @return string
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_get_xml_desc
     */
    function libvirt_storagevolume_get_xml_desc (resource $volumeResource): string {}
}

if (!function_exists('libvirt_storagevolume_create_xml')) {
    /**
     * This function returns string containing volume information in XML format
     * @param resource $storagepoolResource Connection resource of the storagepool
     * @param string $xml XML information to base the new volume on
     * @return resource|bool
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_create_xml
     */
    function libvirt_storagevolume_create_xml (resource $storagepoolResource, string $xml) {}
}

if (!function_exists('libvirt_storagevolume_create_xml_from')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $pool
     * @param  $xml
     * @param  $originalVolume
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_create_xml_from
     */
    function libvirt_storagevolume_create_xml_from ($pool, $xml, $originalVolume) {}
}

if (!function_exists('libvirt_storagevolume_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_delete
     */
    function libvirt_storagevolume_delete ($conn, $flags) {}
}

if (!function_exists('libvirt_storagevolume_download')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $stream
     * @param  $offset
     * @param  $length
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_download
     */
    function libvirt_storagevolume_download ($conn, $stream, $offset, $length, $flags) {}
}

if (!function_exists('libvirt_storagevolume_upload')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $stream
     * @param  $offset
     * @param  $length
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_upload
     */
    function libvirt_storagevolume_upload ($conn, $stream, $offset, $length, $flags) {}
}

if (!function_exists('libvirt_storagevolume_resize')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $capacity
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_storagevolume_resize
     */
    function libvirt_storagevolume_resize ($conn, $capacity, $flags) {}
}

if (!function_exists('libvirt_list_storagepools')) {
    /**
     * This function returns array of storagepool names for the connection resource.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_storagepools
     */
    function libvirt_list_storagepools (resource $connection): array {}
}

if (!function_exists('libvirt_list_active_storagepools')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_active_storagepools
     */
    function libvirt_list_active_storagepools ($conn) {}
}

if (!function_exists('libvirt_list_inactive_storagepools')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_inactive_storagepools
     */
    function libvirt_list_inactive_storagepools ($conn) {}
}

if (!function_exists('libvirt_network_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_define_xml
     */
    function libvirt_network_define_xml ($conn, $xml) {}
}

if (!function_exists('libvirt_network_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xpath
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_xml_desc
     */
    function libvirt_network_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_network_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_undefine
     */
    function libvirt_network_undefine ($conn) {}
}

if (!function_exists('libvirt_network_get')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $name
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get
     */
    function libvirt_network_get ($conn, $name) {}
}

if (!function_exists('libvirt_network_get_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_active
     */
    function libvirt_network_get_active ($conn) {}
}

if (!function_exists('libvirt_network_set_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_set_active
     */
    function libvirt_network_set_active ($conn, $flags) {}
}

if (!function_exists('libvirt_network_get_bridge')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_bridge
     */
    function libvirt_network_get_bridge ($conn) {}
}

if (!function_exists('libvirt_network_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_information
     */
    function libvirt_network_get_information ($conn) {}
}

if (!function_exists('libvirt_network_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_uuid_string
     */
    function libvirt_network_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_network_get_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_uuid
     */
    function libvirt_network_get_uuid ($conn) {}
}

if (!function_exists('libvirt_network_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_name
     */
    function libvirt_network_get_name ($conn) {}
}

if (!function_exists('libvirt_network_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_get_autostart
     */
    function libvirt_network_get_autostart ($conn) {}
}

if (!function_exists('libvirt_network_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_network_set_autostart
     */
    function libvirt_network_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_list_all_networks')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_all_networks
     */
    function libvirt_list_all_networks ($conn, $flags) {}
}

if (!function_exists('libvirt_list_networks')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $flags
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_networks
     */
    function libvirt_list_networks ($conn, $flags) {}
}

if (!function_exists('libvirt_node_get_info')) {
    /**
     * Extract hardware information about the node (machine running the hypervisor).
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_node_get_info
     */
    function libvirt_node_get_info (resource $connection): array {}
}

if (!function_exists('libvirt_node_get_cpu_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $cpunr
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_node_get_cpu_stats
     */
    function libvirt_node_get_cpu_stats ($conn, $cpunr) {}
}

if (!function_exists('libvirt_node_get_cpu_stats_for_each_cpu')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $time
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_node_get_cpu_stats_for_each_cpu
     */
    function libvirt_node_get_cpu_stats_for_each_cpu ($conn, $time) {}
}

if (!function_exists('libvirt_node_get_mem_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_node_get_mem_stats
     */
    function libvirt_node_get_mem_stats ($conn) {}
}

if (!function_exists('libvirt_node_get_free_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_node_get_free_memory
     */
    function libvirt_node_get_free_memory ($conn) {}
}

if (!function_exists('libvirt_nodedev_get')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nodedev_get
     */
    function libvirt_nodedev_get ($conn) {}
}

if (!function_exists('libvirt_nodedev_capabilities')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nodedev_capabilities
     */
    function libvirt_nodedev_capabilities ($conn) {}
}

if (!function_exists('libvirt_nodedev_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xpath
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nodedev_get_xml_desc
     */
    function libvirt_nodedev_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_nodedev_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nodedev_get_information
     */
    function libvirt_nodedev_get_information ($conn) {}
}

if (!function_exists('libvirt_list_nodedevs')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $cap
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_nodedevs
     */
    function libvirt_list_nodedevs ($conn, $cap) {}
}

if (!function_exists('libvirt_nwfilter_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xml
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_define_xml
     */
    function libvirt_nwfilter_define_xml ($conn, $xml) {}
}

if (!function_exists('libvirt_nwfilter_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_undefine
     */
    function libvirt_nwfilter_undefine ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $xpath
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_get_xml_desc
     */
    function libvirt_nwfilter_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_nwfilter_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_get_uuid_string
     */
    function libvirt_nwfilter_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_get_uuid
     */
    function libvirt_nwfilter_get_uuid ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_get_name
     */
    function libvirt_nwfilter_get_name ($conn) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $name
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_lookup_by_name
     */
    function libvirt_nwfilter_lookup_by_name ($conn, $name) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $uuid
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_lookup_by_uuid_string
     */
    function libvirt_nwfilter_lookup_by_uuid_string ($conn, $uuid) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $uuid
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_nwfilter_lookup_by_uuid
     */
    function libvirt_nwfilter_lookup_by_uuid ($conn, $uuid) {}
}

if (!function_exists('libvirt_list_all_nwfilters')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_all_nwfilters
     */
    function libvirt_list_all_nwfilters ($conn) {}
}

if (!function_exists('libvirt_list_nwfilters')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_nwfilters
     */
    function libvirt_list_nwfilters ($conn) {}
}

if (!function_exists('libvirt_get_last_error')) {
    /**
     * Returns the last error produced by libvirt library. Does not reset it so you can read the same error multiple times. TODO: maybe would be better to reset the error.
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_last_error
     */
    function libvirt_get_last_error () {}
}

if (!function_exists('libvirt_version')) {
    /**
     * Provides two information back, libvirt is the version of the library while type will be the version of the hypervisor type against which the library was compiled
     * @param string $type Hypervisor type against which the library was compiled. If  is NULL, "Xen" is assumed.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_version
     */
    function libvirt_version (string $type = null): array {}
}

if (!function_exists('libvirt_check_version')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $major
     * @param  $minor
     * @param  $micro
     * @param  $type
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_check_version
     */
    function libvirt_check_version ($major, $minor, $micro, $type) {}
}

if (!function_exists('libvirt_has_feature')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $name
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_has_feature
     */
    function libvirt_has_feature ($name) {}
}

if (!function_exists('libvirt_get_iso_images')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $path
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_iso_images
     */
    function libvirt_get_iso_images ($path) {}
}

if (!function_exists('libvirt_image_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $name
     * @param  $size
     * @param  $format
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_image_create
     */
    function libvirt_image_create ($conn, $name, $size, $format) {}
}

if (!function_exists('libvirt_image_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn
     * @param  $image
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_image_remove
     */
    function libvirt_image_remove ($conn, $image) {}
}

if (!function_exists('libvirt_logfile_set')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $filename
     * @param  $maxsize
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_logfile_set
     */
    function libvirt_logfile_set ($filename, $maxsize) {}
}

if (!function_exists('libvirt_print_binding_resources')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     * @see https://libvirt.org/php/api-reference.html#libvirt_print_binding_resources
     */
    function libvirt_print_binding_resources () {}
}

if (!function_exists('libvirt_get_active_domain_count')) {
    /**
     * Provides the number of active domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_active_domain_count
     */
    function libvirt_get_active_domain_count (resource $connection): int {}
}

if (!function_exists('libvirt_get_domain_count')) {
    /**
     * Get the number of active and inactive domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_domain_count
     */
    function libvirt_get_domain_count (resource $connection): int {}
}

if (!function_exists('libvirt_get_hostname')) {
    /**
     * This returns the system hostname on which the hypervisor is running (the result of the gethostname(2) system call). If we are connected to a remote system, then this returns the hostname of the remote system.
     * @param resource $connection Connection resource of hypervisor.
     * @return string
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_hostname
     */
    function libvirt_get_hostname (resource $connection): string {}
}

if (!function_exists('libvirt_get_inactive_domain_count')) {
    /**
     * Provides the number of defined but inactive domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     * @see https://libvirt.org/php/api-reference.html#libvirt_get_inactive_domain_count
     */
    function libvirt_get_inactive_domain_count (resource $connection): int {}
}

if (!function_exists('libvirt_list_defined_domains')) {
    /**
     * Get the names of defined but inactive domains. You can use  to get domain resource from name.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_defined_domains
     */
    function libvirt_list_defined_domains (resource $connection): array {}
}

if (!function_exists('libvirt_list_volumes')) {
    /**
     * This function returns array of volume names in a storagepool.
     * @param resource $storagepoolResource
     * @param  $connection Storagepool reousrce.
     * @return array
     * @see https://libvirt.org/php/api-reference.html#libvirt_list_volumes
     */
    function libvirt_list_volumes (resource $storagepoolResource, $connection): array {}
}
define('VIR_DOMAIN_XML_SECURE', 1);
define('VIR_DOMAIN_XML_INACTIVE', 2);
define('VIR_DOMAIN_XML_UPDATE_CPU', 4);
define('VIR_DOMAIN_XML_MIGRATABLE', 8);
define('VIR_NODE_CPU_STATS_ALL_CPUS', -1);
define('VIR_DOMAIN_NOSTATE', 0);
define('VIR_DOMAIN_RUNNING', 1);
define('VIR_DOMAIN_BLOCKED', 2);
define('VIR_DOMAIN_PAUSED', 3);
define('VIR_DOMAIN_SHUTDOWN', 4);
define('VIR_DOMAIN_SHUTOFF', 5);
define('VIR_DOMAIN_CRASHED', 6);
define('VIR_DOMAIN_PMSUSPENDED', 7);
define('VIR_STORAGE_VOL_RESIZE_ALLOCATE', 1);
define('VIR_STORAGE_VOL_RESIZE_DELTA', 2);
define('VIR_STORAGE_VOL_RESIZE_SHRINK', 4);
define('VIR_STORAGE_VOL_CREATE_PREALLOC_METADATA', 1);
define('VIR_STORAGE_VOL_CREATE_REFLINK', 2);
define('VIR_DOMAIN_VCPU_CONFIG', 2);
define('VIR_DOMAIN_VCPU_CURRENT', 0);
define('VIR_DOMAIN_VCPU_LIVE', 1);
define('VIR_DOMAIN_VCPU_MAXIMUM', 4);
define('VIR_DOMAIN_VCPU_GUEST', 8);
define('VIR_SNAPSHOT_DELETE_CHILDREN', 1);
define('VIR_SNAPSHOT_DELETE_METADATA_ONLY', 2);
define('VIR_SNAPSHOT_DELETE_CHILDREN_ONLY', 4);
define('VIR_SNAPSHOT_CREATE_REDEFINE', 1);
define('VIR_SNAPSHOT_CREATE_CURRENT', 2);
define('VIR_SNAPSHOT_CREATE_NO_METADATA', 4);
define('VIR_SNAPSHOT_CREATE_HALT', 8);
define('VIR_SNAPSHOT_CREATE_DISK_ONLY', 16);
define('VIR_SNAPSHOT_CREATE_REUSE_EXT', 32);
define('VIR_SNAPSHOT_CREATE_QUIESCE', 64);
define('VIR_SNAPSHOT_CREATE_ATOMIC', 128);
define('VIR_SNAPSHOT_CREATE_LIVE', 256);
define('VIR_SNAPSHOT_LIST_DESCENDANTS', 1);
define('VIR_SNAPSHOT_LIST_ROOTS', 1);
define('VIR_SNAPSHOT_LIST_METADATA', 2);
define('VIR_SNAPSHOT_LIST_LEAVES', 4);
define('VIR_SNAPSHOT_LIST_NO_LEAVES', 8);
define('VIR_SNAPSHOT_LIST_NO_METADATA', 16);
define('VIR_SNAPSHOT_LIST_INACTIVE', 32);
define('VIR_SNAPSHOT_LIST_ACTIVE', 64);
define('VIR_SNAPSHOT_LIST_DISK_ONLY', 128);
define('VIR_SNAPSHOT_LIST_INTERNAL', 256);
define('VIR_SNAPSHOT_LIST_EXTERNAL', 512);
define('VIR_SNAPSHOT_REVERT_RUNNING', 1);
define('VIR_SNAPSHOT_REVERT_PAUSED', 2);
define('VIR_SNAPSHOT_REVERT_FORCE', 4);
define('VIR_DOMAIN_NONE', 0);
define('VIR_DOMAIN_START_PAUSED', 1);
define('VIR_DOMAIN_START_AUTODESTROY', 2);
define('VIR_DOMAIN_START_BYPASS_CACHE', 4);
define('VIR_DOMAIN_START_FORCE_BOOT', 8);
define('VIR_DOMAIN_START_VALIDATE', 16);
define('VIR_MEMORY_VIRTUAL', 1);
define('VIR_MEMORY_PHYSICAL', 2);
define('VIR_VERSION_BINDING', 1);
define('VIR_VERSION_LIBVIRT', 2);
define('VIR_NETWORKS_ACTIVE', 1);
define('VIR_NETWORKS_INACTIVE', 2);
define('VIR_NETWORKS_ALL', 3);
define('VIR_CONNECT_LIST_NETWORKS_INACTIVE', 1);
define('VIR_CONNECT_LIST_NETWORKS_ACTIVE', 2);
define('VIR_CONNECT_LIST_NETWORKS_PERSISTENT', 4);
define('VIR_CONNECT_LIST_NETWORKS_TRANSIENT', 8);
define('VIR_CONNECT_LIST_NETWORKS_AUTOSTART', 16);
define('VIR_CONNECT_LIST_NETWORKS_NO_AUTOSTART', 32);
define('VIR_CRED_USERNAME', 1);
define('VIR_CRED_AUTHNAME', 2);
define('VIR_CRED_LANGUAGE', 3);
define('VIR_CRED_CNONCE', 4);
define('VIR_CRED_PASSPHRASE', 5);
define('VIR_CRED_ECHOPROMPT', 6);
define('VIR_CRED_NOECHOPROMP', 7);
define('VIR_CRED_REALM', 8);
define('VIR_CRED_EXTERNAL', 9);
define('VIR_DOMAIN_MEMORY_STAT_SWAP_IN', 0);
define('VIR_DOMAIN_MEMORY_STAT_SWAP_OUT', 1);
define('VIR_DOMAIN_MEMORY_STAT_MAJOR_FAULT', 2);
define('VIR_DOMAIN_MEMORY_STAT_MINOR_FAULT', 3);
define('VIR_DOMAIN_MEMORY_STAT_UNUSED', 4);
define('VIR_DOMAIN_MEMORY_STAT_AVAILABLE', 5);
define('VIR_DOMAIN_MEMORY_STAT_ACTUAL_BALLOON', 6);
define('VIR_DOMAIN_MEMORY_STAT_RSS', 7);
define('VIR_DOMAIN_MEMORY_STAT_NR', 8);
define('VIR_DOMAIN_JOB_NONE', 0);
define('VIR_DOMAIN_JOB_BOUNDED', 1);
define('VIR_DOMAIN_JOB_UNBOUNDED', 2);
define('VIR_DOMAIN_JOB_COMPLETED', 3);
define('VIR_DOMAIN_JOB_FAILED', 4);
define('VIR_DOMAIN_JOB_CANCELLED', 5);
define('VIR_DOMAIN_BLOCK_COMMIT_SHALLOW', 1);
define('VIR_DOMAIN_BLOCK_COMMIT_DELETE', 2);
define('VIR_DOMAIN_BLOCK_COMMIT_ACTIVE', 4);
define('VIR_DOMAIN_BLOCK_COMMIT_RELATIVE', 8);
define('VIR_DOMAIN_BLOCK_COMMIT_BANDWIDTH_BYTES', 16);
define('VIR_DOMAIN_BLOCK_COPY_SHALLOW', 1);
define('VIR_DOMAIN_BLOCK_COPY_REUSE_EXT', 2);
define('VIR_DOMAIN_BLOCK_JOB_ABORT_ASYNC', 1);
define('VIR_DOMAIN_BLOCK_JOB_ABORT_PIVOT', 2);
define('VIR_DOMAIN_BLOCK_JOB_SPEED_BANDWIDTH_BYTES', 1);
define('VIR_DOMAIN_BLOCK_JOB_INFO_BANDWIDTH_BYTES', 1);
define('VIR_DOMAIN_BLOCK_JOB_TYPE_UNKNOWN', 0);
define('VIR_DOMAIN_BLOCK_JOB_TYPE_PULL', 1);
define('VIR_DOMAIN_BLOCK_JOB_TYPE_COPY', 2);
define('VIR_DOMAIN_BLOCK_JOB_TYPE_COMMIT', 3);
define('VIR_DOMAIN_BLOCK_JOB_TYPE_ACTIVE_COMMIT', 4);
define('VIR_DOMAIN_BLOCK_PULL_BANDWIDTH_BYTES', 64);
define('VIR_DOMAIN_BLOCK_REBASE_SHALLOW', 1);
define('VIR_DOMAIN_BLOCK_REBASE_REUSE_EXT', 2);
define('VIR_DOMAIN_BLOCK_REBASE_COPY_RAW', 4);
define('VIR_DOMAIN_BLOCK_REBASE_COPY', 8);
define('VIR_DOMAIN_BLOCK_REBASE_RELATIVE', 16);
define('VIR_DOMAIN_BLOCK_REBASE_COPY_DEV', 32);
define('VIR_DOMAIN_BLOCK_REBASE_BANDWIDTH_BYTES', 64);
define('VIR_DOMAIN_BLOCK_RESIZE_BYTES', 1);
define('VIR_MIGRATE_LIVE', 1);
define('VIR_MIGRATE_PEER2PEER', 2);
define('VIR_MIGRATE_TUNNELLED', 4);
define('VIR_MIGRATE_PERSIST_DEST', 8);
define('VIR_MIGRATE_UNDEFINE_SOURCE', 16);
define('VIR_MIGRATE_PAUSED', 32);
define('VIR_MIGRATE_NON_SHARED_DISK', 64);
define('VIR_MIGRATE_NON_SHARED_INC', 128);
define('VIR_MIGRATE_CHANGE_PROTECTION', 256);
define('VIR_MIGRATE_UNSAFE', 512);
define('VIR_MIGRATE_OFFLINE', 1024);
define('VIR_MIGRATE_COMPRESSED', 2048);
define('VIR_MIGRATE_ABORT_ON_ERROR', 4096);
define('VIR_MIGRATE_AUTO_CONVERGE', 8192);
define('VIR_DOMAIN_DEVICE_MODIFY_CURRENT', 0);
define('VIR_DOMAIN_DEVICE_MODIFY_LIVE', 1);
define('VIR_DOMAIN_DEVICE_MODIFY_CONFIG', 2);
define('VIR_DOMAIN_DEVICE_MODIFY_FORCE', 4);
define('VIR_STORAGE_POOL_BUILD_NEW', 0);
define('VIR_STORAGE_POOL_BUILD_REPAIR', 1);
define('VIR_STORAGE_POOL_BUILD_RESIZE', 2);
define('VIR_DOMAIN_FLAG_FEATURE_ACPI', 1);
define('VIR_DOMAIN_FLAG_FEATURE_APIC', 2);
define('VIR_DOMAIN_FLAG_FEATURE_PAE', 4);
define('VIR_DOMAIN_FLAG_CLOCK_LOCALTIME', 8);
define('VIR_DOMAIN_FLAG_TEST_LOCAL_VNC', 16);
define('VIR_DOMAIN_FLAG_SOUND_AC97', 32);
define('VIR_DOMAIN_DISK_FILE', 1);
define('VIR_DOMAIN_DISK_BLOCK', 2);
define('VIR_DOMAIN_DISK_ACCESS_ALL', 4);
define('VIR_DOMAIN_METADATA_DESCRIPTION', 0);
define('VIR_DOMAIN_METADATA_TITLE', 1);
define('VIR_DOMAIN_METADATA_ELEMENT', 2);
define('VIR_DOMAIN_AFFECT_CURRENT', 0);
define('VIR_DOMAIN_AFFECT_LIVE', 1);
define('VIR_DOMAIN_AFFECT_CONFIG', 2);
define('VIR_DOMAIN_STATS_STATE', 1);
define('VIR_DOMAIN_STATS_CPU_TOTAL', 2);
define('VIR_DOMAIN_STATS_BALLOON', 4);
define('VIR_DOMAIN_STATS_VCPU', 8);
define('VIR_DOMAIN_STATS_INTERFACE', 16);
define('VIR_DOMAIN_STATS_BLOCK', 32);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_ACTIVE', 1);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_INACTIVE', 2);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_OTHER', 128);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_PAUSED', 32);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_PERSISTENT', 4);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_RUNNING', 16);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_SHUTOFF', 64);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_TRANSIENT', 8);
define('VIR_CONNECT_GET_ALL_DOMAINS_STATS_ENFORCE_STATS', 2147483648);
define('VIR_DOMAIN_MEM_CONFIG', 2);
define('VIR_DOMAIN_MEM_CURRENT', 0);
define('VIR_DOMAIN_MEM_LIVE', 1);
define('VIR_DOMAIN_MEM_MAXIMUM', 4);
define('VIR_DOMAIN_INTERFACE_ADDRESSES_SRC_LEASE', 0);
define('VIR_DOMAIN_INTERFACE_ADDRESSES_SRC_AGENT', 1);
define('VIR_DOMAIN_INTERFACE_ADDRESSES_SRC_ARP', 0);
define('VIR_CONNECT_FLAG_SOUNDHW_GET_NAMES', 1);
define('VIR_KEYCODE_SET_LINUX', 0);
define('VIR_KEYCODE_SET_XT', 1);
define('VIR_KEYCODE_SET_ATSET1', 2);
define('VIR_KEYCODE_SET_ATSET2', 3);
define('VIR_KEYCODE_SET_ATSET3', 4);
define('VIR_KEYCODE_SET_OSX', 5);
define('VIR_KEYCODE_SET_XT_KBD', 6);
define('VIR_KEYCODE_SET_USB', 7);
define('VIR_KEYCODE_SET_WIN32', 8);
define('VIR_KEYCODE_SET_RFB', 9);
