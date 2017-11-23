[31m  > [0m[34m 8| [0m[33mclass [0m[39mUser [0m[33mextends [0m[39mAuthenticatable[0m
    [34m 9| [0m[33m{[0m
    [34m10| [0m[33m    use [0m[39mNotifiable[0m[33m;[0m
    [34m11| [0m
    [34m12| [0m[33m    [0m[90m/**[0m
    [34m13| [0m[90m     * The attributes that are mass assignable.[0m
    [34m14| [0m[90m     *[0m
    [34m15| [0m[90m     * @var array[0m
    [34m16| [0m[90m     */[0m
    [34m17| [0m[90m    [0m[33mprotected [0m[39m$fillable [0m[33m= [[0m
    [34m18| [0m[33m        [0m[32m'name'[0m[33m, [0m[32m'email'[0m[33m, [0m[32m'password'[0m[33m,[0m
    [34m19| [0m[33m    ];[0m
    [34m20| [0m
    [34m21| [0m[33m    [0m[90m/**[0m
    [34m22| [0m[90m     * The attributes that should be hidden for arrays.[0m
    [34m23| [0m[90m     *[0m
    [34m24| [0m[90m     * @var array[0m
    [34m25| [0m[90m     */[0m
    [34m26| [0m[90m    [0m[33mprotected [0m[39m$hidden [0m[33m= [[0m
    [34m27| [0m[33m        [0m[32m'password'[0m[33m, [0m[32m'remember_token'[0m[33m,[0m
    [34m28| [0m[33m    ];[0m
    [34m29| [0m
    [34m30| [0m[33m    public function [0m[39marticles[0m[33m(){[0m
    [34m31| [0m[33m        return [0m[39m$this[0m[33m->[0m[39mhasMany[0m[33m([0m[32m'App\Article'[0m[33m);[0m
    [34m32| [0m[33m    }[0m
    [34m33| [0m
    [34m34| [0m[33m    public function [0m[39mroles[0m[33m(){[0m
    [34m35| [0m[33m        return [0m[39m$this[0m[33m->[0m[39mbelongsToMany[0m[33m([0m[39mRole[0m[33m::class);[0m
    [34m36| [0m[33m    }[0m
    [34m37| [0m
    [34m38| [0m[33m    [0m[90m/**[0m
    [34m39| [0m[90m    * @param string|array $roles[0m
    [34m40| [0m[90m    */[0m
    [34m41| [0m
    [34m42| [0m[90m    [0m[33mpublic function [0m[39mauthorizeRoles[0m[33m([0m[39m$roles[0m[33m){[0m
    [34m43| [0m[33m      if ([0m[39mis_array[0m[33m([0m[39m$roles[0m[33m)) {[0m
    [34m44| [0m[33m        return [0m[39m$this[0m[33m->[0m[39mhasAnyRole[0m[33m([0m[39m$roles[0m[33m) ||[0m[39mabort[0m[33m([0m[39m401[0m[33m, [0m[32m'This action is unauthorized.'[0m[33m);[0m
    [34m45| [0m[33m      } [0m
    [34m46| [0m[33m      return [0m[39m$this[0m[33m->[0m[39mhasRole[0m[33m([0m[39m$roles[0m[33m) || [0m[39mabort[0m[33m([0m[39m401[0m[33m, [0m[32m'This action is unauthorized.'[0m[33m);[0m
    [34m47| [0m[33m    }[0m
    [34m48| [0m
    [34m49| [0m
    [34m50| [0m[33m    [0m[90m/**[0m
    [34m51| [0m[90m    * Check multiple roles[0m
    [34m52| [0m[90m    * @param array $roles[0m
    [34m53| [0m[90m    */[0m
    [34m54| [0m
    [34m55| [0m[90m    [0m[33mpublic function [0m[39mhasAnyRole[0m[33m([0m[39m$roles[0m[33m)[0m
    [34m56| [0m[33m{[0m
    [34m57| [0m[33m      return [0m[39mnull [0m[33m!== [0m[39m$this[0m[33m->[0m[39mroles[0m[33m()->[0m[39mwhereIn[0m[33m([0m[32m'name'[0m[33m, [0m[39m$roles[0m[33m)->[0m[39mfirst[0m[33m();[0m
    [34m58| [0m[33m    }[0m
    [34m59| [0m
    [34m60| [0m[33m    [0m[90m/**[0m
    [34m61| [0m[90m    * Check one role[0m
    [34m62| [0m[90m    * @param string $role[0m
    [34m63| [0m[90m    */[0m
    [34m64| [0m
    [34m65| [0m[90m    [0m[33mpublic function [0m[39mhasRole[0m[33m([0m[39m$role[0m[33m) {[0m
    [34m66| [0m[33m      return [0m[39mnull [0m[33m!== [0m[39m$this[0m[33m->[0m[39mroles[0m[33m()->[0m[39mwhere[0m[33m([0m[32m'name'[0m[33m, [0m[39m$role[0m[33m)->[0m[39mfirst[0m[33m();[0m
    [34m67| [0m[33m    }[0m
    [34m68| [0m[33m}[0m

