<?php

namespace App\Policies;

use App\User;
use App\JobSheet;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobSheetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  JobSheet  $jobSheet
     * @return bool
     */
    public function destroy(User $user, JobSheet $jobSheet)
    {
        return $user->id === $jobSheet->user_id;
    }
}
