<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Types\Boolean;

/**
 *
 */
trait HasAuthor
{
    public function author(): User
    {
        return $this->authorRelation;
    }


    public function authorRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    //checke if the this person is the author
    public function isAuthoredBy(User $user): bool
    {
      return $this->author()->matches($user);
    }
    //assigns the author to the article
    public function authoredBy(User $author)
    {
       return $this->authorRelation()->associate($author);
    }
}
