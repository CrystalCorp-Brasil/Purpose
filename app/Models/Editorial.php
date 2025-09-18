<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Editorial extends Model {
        protected $table = 'editorials';
        protected $fillable = ['title','publish','cover','user_id','visits'];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
