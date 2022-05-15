<?php

namespace JordenPowleyWebDev\LaravelAdminSettings\Http\Controllers;

use JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting\StoreSettingRequest;
use JordenPowleyWebDev\LaravelAdminSettings\Http\Requests\Setting\UpdateSettingRequest;
use JordenPowleyWebDev\LaravelAdminSettings\Models\Setting;
use Illuminate\Http\RedirectResponse;

/**
 * Class SettingController
 */
class SettingController extends Controller
{
    /**
     * SettingController::__construct().
     */
    public function __construct()
    {
        // TODO - Include Auth
    }

    public function index()
    {
        // TODO -Include Functionality
    }

    public function show(Setting $setting)
    {
        // TODO - Include Functionality
    }

    public function create()
    {
        // TODO - Include Functionality
    }

    public function store(StoreSettingRequest $request): RedirectResponse
    {
        // TODO - Include Functionality
    }

    public function edit(Setting $setting)
    {
        // TODO - Include Functionality
    }

    public function update(UpdateSettingRequest $request, Setting $setting): RedirectResponse
    {
        // TODO - Include Functionality
    }

    public function delete(Setting $setting)
    {
        // TODO - Include Functionality
    }

    public function destroy(Setting $setting): RedirectResponse
    {
        // TODO - Include Functionality
    }

    public function restore(Setting $setting): RedirectResponse
    {
        // TODO - Include Functionality
    }
}
