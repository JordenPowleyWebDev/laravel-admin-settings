<?php

namespace App\Http\Requests\User;
namespace JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * Class StoreSettingRequest
 * @package JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting
 */
class StoreSettingRequest extends FormRequest
{
    /**
     * StoreSettingRequest::authorize()
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * StoreSettingRequest::rules()
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
