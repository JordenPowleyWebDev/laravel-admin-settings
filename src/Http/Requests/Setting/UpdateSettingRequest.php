<?php

namespace App\Http\Requests\User;
namespace JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * Class UpdateSettingRequest
 * @package JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting
 */
class UpdateSettingRequest extends FormRequest
{
    /**
     * UpdateSettingRequest::authorize()
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * UpdateSettingRequest::rules()
     *
     * @param Request $request
     * @return array
     */
    public function rules(Request $request): array
    {
        // TODO - Include Rules

        return [

        ];
    }
}
