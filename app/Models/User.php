<?php
    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User  extends Authenticatable implements MustVerifyEmail {
        use HasFactory, Notifiable;
        protected $table = 'users';
        protected $fillable = ['name','username','image','bio','email','password',];
        protected $hidden = ['password','remember_token',];
        protected function casts(): array {
            return ['email_verified_at' => 'datetime','password' => 'hashed',];
        }

        public function images(): HasMany {
            return $this->hasMany(Image::class);
        }

        public function editorials(): HasMany {
            return $this->hasMany(Editorial::class);
        }

        public function projects(): HasMany {
            return $this->hasMany(Project::class);
        }
    }
