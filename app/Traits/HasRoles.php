<?php

namespace App\Traits;

//use App\Models\Role;
use Spatie\Permission\Models\Role;

trait HasRoles {

    /**
     * Relationship between a user and their role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     * Verifies user has specified role.
     *
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->role->slug === $role;
        }

        return $role->contains('slug', $this->role->slug);
    }

    /**
     * Verifies user has specified permission.
     *
     * @return boolean
     */
    public function hasPermission($permission) {
        return $this->role->permissions->contains('slug', $permission);
    }
}