<?php

namespace App\Repositories;

use App\User;
use App\JobSheet;

class JobSheetRepository
{
    /**
     * Get all of the job sheets for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return JobSheet::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

    /**
     * Get all of the job sheets for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forJobSheet($jobSheetId)
    {
        return JobSheet::find($jobSheetId)
                    ->get();
    }
}
