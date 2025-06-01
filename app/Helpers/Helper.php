<?php

use App\Http\Controllers\Authorization\AuthorizationChecker;
use App\Models\Authorization\AuthorizationPermission;
use App\Models\Plugins\Advertisement;
use App\Models\Plugins\Credits\PointSettings;
use App\Models\Plugins\Credits\PointTransaction;
use App\Models\Plugins\Credits\UserPoint;
use App\Models\Plugins\MenuBuilder\Page;
use App\Models\User;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

if (! function_exists('makeImage')) {
    function makeImage($data, string $path, array $size = [200, 200])
    {
        $image = str_replace('data:image/png;base64,', '', $data);
        $image = str_replace(' ', '+', $image);
        $name = Str::uuid().'.'.'png';
        $dir = checkDir($path).'/'.$name;
        $manager = new ImageManager(new Driver);
        $manager->read(base64_decode($image))->cover($size[0], $size[1])->save(storage_path('app/public/'.$dir));

        return 'storage/'.$dir;
    }
}

if (! function_exists('cropImage')) {
    function cropImage(Request $request, string $source, string $path, array $size = [600, 360])
    {
        if ($request->hasFile($source)) {
            $file = $request->file($source);
            $manager = new ImageManager(new Driver);
            $image = $manager->read($file);
            $image->cover($size[0], $size[1]);
            $name = Str::uuid().'.'.$file->getClientOriginalExtension();
            $dir = checkDir($path).'/'.$name;
            $image->save(storage_path('app/public/'.$dir));

            return 'storage/'.$dir;
        } else {
            return 'default.png';
        }
    }
}
if (! function_exists('makeWebp')) {
    function makeWebp(Request $request, string $source, string $path, int $width = 1000, int $quality = 70)
    {
        if ($request->hasFile($source)) {
            $name = Str::uuid().'.webp';
            $dir = checkDir($path).'/'.$name;

            $manager = new ImageManager(new Driver);
            $image = $manager->read($request->file($source));
            $image->resizeDown($width, $width * 0.75);
            $image->toWebp($quality)->save(storage_path('app/public/'.$dir));

            return 'storage/'.$dir;
        } else {
            return 'default.png';
        }
    }
}

if (! function_exists('storeFile')) {
    function storeFile(Request $request, string $source = 'avatar', string $path = 'avatars')
    {
        $files = $request->file($source);
        $dir = checkDir($path);
        if (is_array($files)) {
            $file_array = [];
            foreach ($files as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension() ?: $file->guessExtension();
                    $newName = Str::uuid().'.'.$ext;
                    $file->storeAs($dir, $newName);
                    $file_array[] = 'storage/'.$dir.'/'.$newName;
                }
            }

            return $file_array;
        } elseif ($request->hasFile($source) && ! is_array($files)) {
            $file = $request->file($source);
            if ($file->isValid()) {
                $ext = $file->getClientOriginalExtension() ?: $file->guessExtension();
                $newName = Str::uuid().'.'.$ext;
                $file->storeAs($dir, $newName);

                return 'storage/'.$dir.'/'.$newName;
            }
        }

        return 'default.png';
    }
}

if (! function_exists('saveImage')) {
    function saveImage(Request $request, string $name, string $path)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageNew = $name.uniqueId(50)/* . '.' . $image->getClientOriginalExtension() */;
            if ($image->isValid()) {
                $image->storeAs($path, $imageNew);

                return 'uploads/'.$path.'/'.$imageNew;
            }
        } else {
            return 'uploads/avatar/avatar.png';
        }
    }
}

if (! function_exists('loadFile')) {
    function loadFile($path, $default = null)
    {
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }
        $public_path = public_path($path);
        $storage_path = storage_path('app/public/'.$path);

        if (File::exists($public_path)) {
            return asset($path);
        } elseif (File::exists($storage_path)) {
            return asset('storage/'.$path);
        } else {
            return asset($default ?? 'default.png');
        }
    }
}

if (! function_exists('removeFile')) {
    function removeFile($path)
    {
        $is_detect = strpos($path, 'default.png') === false ? true : false;

        return ($is_detect && file_exists($path) && is_file($path) && ! is_dir($path)) ? @unlink($path) : false;
    }
}

if (! function_exists('checkDir')) {
    function checkDir($path)
    {
        $dir = storage_path('app/public/'.date('Y').'/'.date('m').'/'.$path);
        if (! is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return date('Y').'/'.date('m').'/'.$path;
    }
}

if (! function_exists('copyFile')) {
    function copyFile($path, $target = 'avatars')
    {
        $is_detect = strpos($path, 'default.png') === false ? true : false;
        checkDir($target);
        $from = public_path($path);
        $target = str_replace('tempfilez', $target, $path);
        if ($is_detect && file_exists($from) && is_file($from) && ! is_dir($from)) {
            File::copy($from, public_path($target));

            return $target;
        }

        return false;
    }
}

if (! function_exists('logo')) {
    function logo()
    {
        $isLightTheme = setting('app_theme') === 'light';
        $logoSetting = $isLightTheme ? 'app_dark_logo' : 'app_light_logo';

        return loadFile(setting($logoSetting), asset('logo.png'));
    }
}

if (! function_exists('theme')) {
    function theme()
    {
        // return 'phone';
        $is_detect = preg_match("/(android|avantgo|blackberry|iphone|ipod|ipad|bolt|boost|cricket|docomo |fone|hiptop|opera mini|mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER['HTTP_USER_AGENT']);
        if ($is_detect) {
            return 'phone';
        }

        return 'web';
    }
}
if (! function_exists('isActive')) {
    /**
     * Check if the current route matches any of the given routes.
     *
     * @param  string|array  $routes  Single route name or array of route names
     * @param  bool  $exact  Whether to match exact routes or allow partial/nested route matching
     */
    function isActive($routes, bool $exact = false): bool
    {
        $routes = is_array($routes) ? $routes : [$routes];

        foreach ($routes as $route) {
            if ($exact) {
                // Exact route matching
                if (request()->routeIs($route)) {
                    return true;
                }
            } else {
                // Partial/wildcard matching using the "{$route}*" pattern
                if (request()->routeIs($route) || request()->routeIs("{$route}.*")) {
                    return true;
                }
            }
        }

        return false;
    }
}

if (! function_exists('activeNav')) {
    /**
     * Get active CSS class if the current route matches any of the given routes.
     *
     * @param  string|array  $routes  Single route name or array of route names
     * @param  string  $activeClass  CSS class to return when route is active
     * @param  bool  $exact  Whether to match exact routes or allow partial/nested route matching
     */
    function activeNav($routes, string $activeClass = 'active', bool $exact = false): string
    {
        return isActive($routes, $exact) ? " {$activeClass} " : '';
    }
}

if (! function_exists('openNav')) {
    function openNav(array $routes)
    {
        $rt = '';
        foreach ($routes as $route) {
            $rt .= request()->routeIs($route) || '';
        }

        return $rt ? ' show ' : '';
    }
}
if (! function_exists('svgStar')) {
    function svgStar($fill = '4285f4')
    {
        return '<span class="pl-1"><img title="Ainjibi Verified Firm" alt="Ainjibi Verified Firm" style="height: 22px;vertical-align: middle; margin-bottom:2px;cursor:pointer;width: 22px;" src="'.asset('uploads/appLogo/verified.png').'"></span>';
    }
}

if (! function_exists('userName')) {
    function userName($user)
    {
        if ($user->company_name) {
            if ($user->blue_badge) {
                return ucfirst($user->company_name).' '.svgStar();
            }

            return ucfirst($user->company_name);
        }

        return ucfirst($user->fullname);
    }
}
if (! function_exists('makeBackEndDate')) {
    function makeBackEndDate($date)
    {
        return Carbon::createFromFormat('d/m/Y', $date);
    }
}
if (! function_exists('makeFrontEndDate')) {
    function makeFrontEndDate($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date);
    }
}

if (! function_exists('panel')) {
    function panel($val)
    {
        return config('panel.'.$val);
    }
}

if (! function_exists('roleName')) {
    function roleName($roles)
    {
        $r = '';
        foreach ($roles->where('name', '!=', 'client') as $role) {
            $r .= '<span class="badge badge-info">'.ucfirst(explode('@uid', $role->name)[0]).'</span>';
        }

        return $r;
    }
}
if (! function_exists('trimRoleAdmin')) {
    function trimRoleAdmin($roles)
    {
        return str_replace('-', ' ', $roles);
    }
}
if (! function_exists('trimRole')) {
    function trimRole($val)
    {
        return str_replace('-', ' ', explode('@uid', $val)[0]);
    }
}

if (! function_exists('userStatus')) {
    function userStatus($status)
    {
        switch ($status) {
            case 'active':
                return '<span class="badge badge-success">Active</span>';
                break;
            case 'pending':
                return '<span class="badge badge-warning">Pending</span>';
                break;
            case 'remove':
                return '<span class="badge" style="background-color: #fa5661;color:#fff;">Remove</span>';
                break;
            case 'mute':
                return '<span class="badge badge-info">Mute</span>';
                break;
            default:
                return '<span class="badge badge-danger">Suspend</span>';
                break;
        }
    }
}
if (! function_exists('selectStatus')) {
    function selectStatus($value = '')
    {
        return '
            <option value="active" '.($value == 'active' ? 'selected' : '').'>Active</option>
            <option value="pending" '.($value == 'pending' ? 'selected' : '').'>Pending</option>
            <option value="remove" '.($value == 'remove' ? 'selected' : '').'>Remove</option>
            <option value="mute" '.($value == 'mute' ? 'selected' : '').'>Mute</option>
            <option value="suspend" '.($value == 'suspend' ? 'selected' : '').'>Suspend</option>';
    }
}

if (! function_exists('uniqueId')) {
    function uniqueId($lenght = 8)
    {
        if (function_exists('random_bytes')) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new \Exception('no cryptographically secure random function available');
        }

        return substr(bin2hex($bytes), 0, $lenght);
    }
}
if (! function_exists('propic')) {
    function propic($user)
    {
        return $user->profile_picture ? asset($user->profile_picture) : asset('assist/images/avatar.png');
    }
}
if (! function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}

if (! function_exists('slug')) {
    function slug($slug)
    {
        return Str::slug($slug);
    }
}

if (! function_exists('word_limit')) {
    function word_limit(string $string, int $limit = 8)
    {
        return Str::words(strip_tags($string), $limit);
    }
}

if (! function_exists('userHasPrivilege')) {
    function userHasPrivilege(array $permission)
    {
        if (AuthorizationChecker::canDo($permission)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('bn_slug')) {
    /**
     * Friendly UTF-8 URL for all languages
     *
     * @param  string|null  $string
     * @param  string  $separator
     * @return array|string|string[]|null
     */
    function bn_slug($text, $separator = '-')
    {
        $array = ['।', 'ঃ', '৳', '`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '=', '+', ';', ':', "'", '"', '|', '\\', ',', '<', '.', '>', '´', '’', '¢', '«', '»', '©', '†', '°', '÷', '[[', ']]', '…', '—', '–', '€', '≥', '≤', '–', '×', '≠', '¶', '±', '‘', '’', '“', '”', '®', '§', '™', '♪', '♫', '♥', 'π', '≈', '/', '?'];
        $slug = strtolower(str_replace($array, '', trim($text)));

        return preg_replace('/-{2,}/', $separator, str_replace(' ', $separator, $slug));
        // return strtolower(preg_replace('/\s+/u', '-', trim($text)));
    }
}
if (! function_exists('cat_slug')) {
    function cat_slug($categories)
    {
        return $categories->first()->slug;
    }
}
if (! function_exists('category')) {
    function category($categories)
    {
        return $categories->first();
    }
}
if (! function_exists('details_route')) {
    function details_route($article)
    {
        return route('details', [cat_slug($article->categories), $article->slug]);
    }
}

if (! function_exists('make_slug')) {
    function make_slug($string)
    {
        $slug = preg_replace('/\s+/u', '-', trim($string));
        $slug = str_replace('/', '', $slug);
        $slug = str_replace('?', '', $slug);

        return mb_strtolower($slug, 'UTF-8');
    }
}
if (! function_exists('getHref')) {
    function getHref($link)
    {
        $href = '#';

        if ($link['type'] == 'home') {
            $href = route('home');
        } elseif ($link['type'] == 'profiles') {
            $href = route('home');
        } elseif ($link['type'] == 'pricing') {
            $href = route('home');
        } elseif ($link['type'] == 'faq') {
            $href = route('home');
        } elseif ($link['type'] == 'blogs') {
            $href = route('home');
        } elseif ($link['type'] == 'contact') {
            $href = route('home');
        } elseif ($link['type'] == 'custom') {
            if (empty($link['href'])) {
                $href = '#';
            } else {
                $href = $link['href'];
            }
        } else {
            $pageid = (int) $link['type'];
            $page = Page::find($pageid);
            if (! empty($page)) {
                $href = route('front.dynamicPage', [$page->slug]);
            } else {
                $href = '#';
            }
        }

        return $href;
    }
}
if (! function_exists('niceNumber')) {
    function niceNumber($n)
    {
        // first strip any formatting;
        $n = (0 + str_replace(',', '', $n));

        // is this a number?
        if (! is_numeric($n)) {
            return $n;
        }

        // now filter it;
        if ($n >= 1000000000000) {
            return round(($n / 1000000000000), 1).' T';
        } elseif ($n >= 1000000000) {
            return round(($n / 1000000000), 1).' B';
        } elseif ($n >= 1000000) {
            return round(($n / 1000000), 1).' M';
        } elseif ($n >= 1000) {
            return round(($n / 1000), 1).' K';
        }

        return number_format($n);
    }
}

if (! function_exists('niceFileSize')) {
    function niceFileSize($bytes)
    {
        $result = '';
        $bytes = floatval($bytes);
        $arBytes = [
            0 => [
                'UNIT' => 'TB',
                'VALUE' => pow(1024, 4),
            ],
            1 => [
                'UNIT' => 'GB',
                'VALUE' => pow(1024, 3),
            ],
            2 => [
                'UNIT' => 'MB',
                'VALUE' => pow(1024, 2),
            ],
            3 => [
                'UNIT' => 'KB',
                'VALUE' => 1024,
            ],
            4 => [
                'UNIT' => 'B',
                'VALUE' => 1,
            ],
        ];

        foreach ($arBytes as $arItem) {
            if ($bytes >= $arItem['VALUE']) {
                $result = $bytes / $arItem['VALUE'];
                $result = strval(round($result, 2)).' '.$arItem['UNIT'];
                break;
            }
        }

        return $result;
    }
}

if (! function_exists('hex2rgb')) {
    function hex2rgb($colour)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            [$r, $g, $b] = [$colour[0].$colour[1], $colour[2].$colour[3], $colour[4].$colour[5]];
        } elseif (strlen($colour) == 3) {
            [$r, $g, $b] = [$colour[0].$colour[0], $colour[1].$colour[1], $colour[2].$colour[2]];
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);

        return ['red' => $r, 'green' => $g, 'blue' => $b];
    }
}

if (! function_exists('seoTool')) {
    function seoTool($title = null, $description = null, $keywords = null, $ogimage = null)
    {
        SEOTools::setTitle($title ?? setting('slogan'));
        SEOTools::setDescription($description ?? setting('app_description'));
        SEOTools::setCanonical(url()->current());
        SEOTools::twitter()->setTitle(url()->current());
        SEOTools::twitter()->setSite('@bangali');
        SEOMeta::addKeyword($keywords ?? setting('app_keyword'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage(loadFile($ogimage ?? setting('ogimage')));
        OpenGraph::setDescription($description ?? setting('app_description'));
        SEOTools::jsonLd()->addImage(loadFile($ogimage ?? setting('ogimage')));
    }
}
if (! function_exists('get_cpu_uses')) {
    function get_cpu_uses()
    {
        $load = sys_getloadavg();

        return $load[0];
    }
}

if (! function_exists('get_memory_usage')) {
    function get_memory_usage()
    {
        $free = shell_exec('free');
        $free = (string) trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(' ', $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2] / $mem[1] * 100;

        return $memory_usage;
    }
}
// Get Ads from DB

if (! function_exists('getAds')) {
    function getAds($page, $position, $source)
    {
        return optional(Advertisement::where('status', 1)
            ->where('page', $page)
            ->where('position', $position)
            ->where('source', $source)->first())->script;
    }
}

if (! function_exists('getRgb')) {
    function getRgb($hex)
    {
        return sscanf($hex, '#%02x%02x%02x');
    }
}

// POINT SYSTEM FUNCTIONS

if (! function_exists('badgeName')) {
    function badgeName($badge)
    {
        if ($badge->image) {
            return '<img src="'.asset($badge->image).'" alt="'.$badge->name.'" class="img-fluid img-responsive img">';
        }
        $a = getRgb($badge->color);
        $rgb = 'rgb('.$a[2].','.$a[1].','.$a[0].')';

        return '<span class="badge p-3 text-light" style="background: linear-gradient(90deg, '.$badge->color.', '.$rgb.')"><i class="fa '.$badge->icon.' pr-1"></i>'.$badge->name.'</span>';
    }
}
if (! function_exists('checkValue')) {
    function checkValue($array, $name)
    {
        return array_key_exists($name, $array) ? $array[$name] : '';
    }
}

if (! function_exists('assignPoint')) {
    function assignPoint($user_id = null, $name = null, $action = null, $action_id = null)
    {
        $type = explode('_', $name)[0];
        $start = now()->format('Y-m-d').' 00:00:00';
        $end = now()->format('Y-m-d').' 23:59:59';
        $user = User::find($user_id);
        $level_id = $user->getDefaultLevel->level_id;

        $earnCredit = AuthorizationPermission::where('level_id', $level_id)
            ->where('module', 'like', 'credit%')
            ->pluck('value', 'name')->toArray();
        $todayTotal = PointTransaction::where('user_id', $user_id)
            ->where('created_at', '>=', $start)
            ->where('created_at', '<=', $end)->sum('point');
        $totalByName = PointTransaction::where('user_id', $user_id)
            ->where('created_at', '>=', $start)
            ->where('created_at', '<=', $end)
            ->where('point_of', $name)->sum('point');
        $chkPointName = PointTransaction::where('user_id', $user_id)
            ->where('point_of', 'like', "$type%")
            ->where('action_id', $action_id)->first();
        $assigns = PointSettings::where('name', 'like', "$type%")
            ->pluck('value', 'name')->toArray();

        if (
            $earnCredit['allow'] == 1 &&
            $earnCredit['limit'] > $todayTotal &&
            $totalByName < $assigns[$type.'_maxday'] &&
            ! $chkPointName
        ) {
            PointTransaction::create([
                'user_id' => $user_id,
                'action' => $action,
                'action_id' => $action_id,
                'point_of' => $name,
                'point' => $assigns[$name],
            ]);
        }
        $userTotalPoint = PointTransaction::where('user_id', $user_id)->sum('point');
        UserPoint::updateOrCreate([
            'user_id' => $user_id,
        ], [
            'user_id' => $user_id,
            'point' => $userTotalPoint,
        ]);
    }
}
if (! function_exists('view_range')) {
    function view_range($view = 0)
    {
        $range = explode(',', setting('view_range'));
        if (count($range) == 2) {
            return niceNumber($view + mt_rand($range[0], $range[1]));
        }

        return niceNumber($view);
    }
}
