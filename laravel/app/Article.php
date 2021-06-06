<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //
	public function user(): BelongsTo //型宣言
	{
		return $this->belongsTo('App\User');
	}
}
