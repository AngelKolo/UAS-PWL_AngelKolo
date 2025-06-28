<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;
use CodeIgniter\Filters\Cors;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\ForceHTTPS;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\PageCache;
use CodeIgniter\Filters\PerformanceMetrics;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseFilters
{
    /**
     * ------------------------------------------------------------------
     * ALIAS FILTERS
     * ------------------------------------------------------------------
     *
     * Tambahkan alias baru di sini agar bisa dipakai
     * di Routes.php, mis. ['filter' => 'auth'].
     */
    public array $aliases = [
        // ───── FILTER BAWAAN CODEIGNITER ─────
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'cors'          => Cors::class,
        'forcehttps'    => ForceHTTPS::class,
        'pagecache'     => PageCache::class,
        'performance'   => PerformanceMetrics::class,

        // ───── FILTER BUATAN APLIKASI ─────
        'auth'          => \App\Filters\Auth::class,          // << alias baru (wajib)
        'redirect'      => \App\Filters\RedirectIfAuth::class // << opsional (pakai jika dibutuhkan)
    ];

    /**
     * ------------------------------------------------------------------
     * REQUIRED FILTERS (jangan ubah kecuali paham fungsinya)
     * ------------------------------------------------------------------
     */
    public array $required = [
        'before' => [
            'forcehttps',
            'pagecache',
        ],
        'after' => [
            'pagecache',
            'performance',
            'toolbar',
        ],
    ];

    /**
     * GLOBAL FILTERS
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * HTTP METHOD–BASED FILTERS
     */
    public array $methods = [];

    /**
     * URI PATTERN FILTERS
     */
    public array $filters = [];
}
