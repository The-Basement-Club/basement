<?php

namespace App\Http\Requests\Server;

use App\Http\Requests\AbstractRequest;
use App\Http\Requests\AuthorizedViaCredential;
use App\Http\Requests\BuildValidatorForVendor;
use App\PersonalAccessToken;
use Illuminate\Foundation\Http\FormRequest;

class StoreWithoutCredentialsRequest extends AbstractRequest
{
    public function authorize(): bool
    {
        return $this->user()->tokenCan(PersonalAccessToken::SCOPE_CREATE_SERVER);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'threads' => 'required|int',
            'memory' => 'required|int',
            'is_hypervisor' => 'boolean',
            'collect_metrics' => 'boolean',
            'uses_client' => 'boolean',
            'has_backup' => 'boolean',
            'is_powered_on' => 'boolean',
            'ip6_address' => 'string',
            'kernel' => 'string',
            'distro' => 'string',
            'boot_disk' => 'string',
            'cost_in_cents' => 'integer',
        ];
    }
}
