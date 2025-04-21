<?php

namespace Tests\Feature\Services;

use App\Constants\TenancyPermissionConstants;
use App\Services\TenantCreationService;
use App\Services\TenantPermissionService;
use Tests\Feature\FeatureTest;

class TenantCreationServiceTest extends FeatureTest
{
    public function test_create_tenant(): void
    {
        $user = $this->createUser();

        $tenantPermissionService = \Mockery::mock(TenantPermissionService::class);
        $tenantPermissionService->shouldReceive('assignTenantUserRole')
            ->once()
            ->with(\Mockery::any(), $user, TenancyPermissionConstants::TENANT_CREATOR_ROLE);

        $tenantCreationService = new TenantCreationService($tenantPermissionService);

        $tenant = $tenantCreationService->createTenant($user);

        $this->assertEquals(1, $user->tenants()->count());
    }
}
