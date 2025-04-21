<?php

namespace Tests\Feature\Services;

use App\Constants\ConfigConstants;
use App\Services\ConfigService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Tests\Feature\FeatureTest;

class ConfigServiceTest extends FeatureTest
{
    public function test_load_configs()
    {
        Cache::shouldReceive('many')->once()->with(ConfigConstants::OVERRIDABLE_CONFIGS)->andReturn([
            'app.name' => 'SaaSyKit',
            'app.support_email' => 'test@test.com',
        ]);

        Config::shouldReceive('set')->once()->with([
            'app.name' => 'SaaSyKit',
            'app.support_email' => 'test@test.com',
        ]);

        $configService = new ConfigService;

        $configService->loadConfigs();
    }

    public function test_set_not_allowed()
    {
        $configService = new ConfigService;

        $this->expectException(\Exception::class);

        $configService->set('not_allowed_key', 'http://localhost');
    }

    public function test_set()
    {
        $configService = new ConfigService;

        Cache::shouldReceive('forever')->once()->with('app.name', 'SaaSyKit');

        $configService->set('app.name', 'SaaSyKit');

        $configInDb = \App\Models\Config::where('key', 'app.name')->first();

        $this->assertEquals('SaaSyKit', $configInDb->value);
    }

    public function test_set_encrypted_config()
    {
        $configService = new ConfigService;

        Cache::shouldReceive('forever')->once()->with('services.ses.secret', 'secret');

        $configService->set('services.ses.secret', 'secret');

        $configInDb = \App\Models\Config::where('key', 'services.ses.secret')->first();

        $this->assertEquals('secret', decrypt($configInDb->value));
    }

    public function test_get()
    {
        $configService = new ConfigService;

        $configService->set('app.default_currency', 'EUR');

        $this->assertEquals('EUR', $configService->get('app.default_currency'));
    }

    public function test_get_encrypted_config()
    {
        $configService = new ConfigService;

        $configService->set('services.ses.secret', 'secret');

        $this->assertEquals('secret', $configService->get('services.ses.secret'));
    }
}
