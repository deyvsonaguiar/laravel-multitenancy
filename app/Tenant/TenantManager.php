<?php
declare(strict_types=1);

namespace App\Tenant;

use App\Models\Company;

class TenantManager
{
    private $tenant;

    /**
     * @return company
     */
    public function getTenant(): ? Company //null or company
    {
        return $this->tenant;
    }

    /**
     * @param company $tenant
     */
    public function setTenant(?Company $tenant): void
    {
        $this->tenant = $tenant;
    }


}

