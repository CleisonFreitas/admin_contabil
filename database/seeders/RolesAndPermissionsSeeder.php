<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        // Dashboard
        $dashboardPermission = Permission::Where('name', 'like', '%dashboard%')->get();

        if ($dashboardPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view dashboard']);
        }

        // Fornecedores
        $supplierPermission = Permission::Where('name', 'like', '%suppliers%')->get();

        if ($supplierPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'create suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'update suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete suppliers']);
        }

        // Plano de contas
        $accountPlanPermission = Permission::Where('name', 'like', '%account_plan%')->get();

        if ($accountPlanPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view account_plan']);
            Permission::create(['guard_name' => 'api', 'name' => 'create account_plan']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit account_plan']);
            Permission::create(['guard_name' => 'api', 'name' => 'update account_plan']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete account_plan']);
        }

        // Centro de custos
        $costCenterPlanPermission = Permission::Where('name', 'like', '%cost_center%')->get();

        if ($costCenterPlanPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view cost_center']);
            Permission::create(['guard_name' => 'api', 'name' => 'create cost_center']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit cost_center']);
            Permission::create(['guard_name' => 'api', 'name' => 'update cost_center']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete cost_center']);
        }

        // Formas de pagamento
        $paymentWayPermission = Permission::Where('name', 'like', '%payment_way%')->get();

        if ($paymentWayPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view payment_way']);
            Permission::create(['guard_name' => 'api', 'name' => 'create payment_way']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit payment_way']);
            Permission::create(['guard_name' => 'api', 'name' => 'update payment_way']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete payment_way']);
        }

        // Contas à pagar
        $billToPayPermission = Permission::Where('name', 'like', '%bill_to_pay%')->get();

        if ($billToPayPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view bill_to_pay']);
            Permission::create(['guard_name' => 'api', 'name' => 'create bill_to_pay']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit bill_to_pay']);
            Permission::create(['guard_name' => 'api', 'name' => 'update bill_to_pay']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete bill_to_pay']);
        }

        // Grupo de usuários
        $groupUserPermission = Permission::Where('name', 'like', '%group_user%')->get();

        if ($groupUserPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view group_user']);
            Permission::create(['guard_name' => 'api', 'name' => 'create group_user']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit group_user']);
            Permission::create(['guard_name' => 'api', 'name' => 'update group_user']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete group_user']);
        }

        // Usuários
        $UserPermission = Permission::Where('name', 'like', '%user%')->get();

        if ($UserPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view user']);
            Permission::create(['guard_name' => 'api', 'name' => 'create user']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit user']);
            Permission::create(['guard_name' => 'api', 'name' => 'update user']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete user']);
        }


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::Where(['guard_name' => 'api','name' => 'Super Admin'])->get();
        if($role->count() < 1) {
            $role = Role::create(['guard_name' => 'api','name' => 'Super Admin']);
            $role->givePermissionTo(Permission::all());
        }


    }
}
