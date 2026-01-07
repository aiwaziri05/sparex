<?php

namespace App\Helpers;

class TailwindColorHelper
{
    /**
     * Tailwind CSS color palette mapping
     * Colors: 50, 100, 200, 300, 400, 500, 600, 700, 800, 900
     */
    private static $colorMap = [
        'indigo' => [
            50 => '#eef2ff',
            100 => '#e0e7ff',
            200 => '#c7d2fe',
            300 => '#a5b4fc',
            400 => '#818cf8',
            500 => '#6366f1',
            600 => '#4f46e5',
            700 => '#4338ca',
            800 => '#3730a3',
            900 => '#312e81',
        ],
        'emerald' => [
            50 => '#ecfdf5',
            100 => '#d1fae5',
            200 => '#a7f3d0',
            300 => '#6ee7b7',
            400 => '#34d399',
            500 => '#10b981',
            600 => '#059669',
            700 => '#047857',
            800 => '#065f46',
            900 => '#064e3b',
        ],
        'amber' => [
            50 => '#fffbeb',
            100 => '#fef3c7',
            200 => '#fde68a',
            300 => '#fcd34d',
            400 => '#fbbf24',
            500 => '#f59e0b',
            600 => '#d97706',
            700 => '#b45309',
            800 => '#92400e',
            900 => '#78350f',
        ],
        'blue' => [
            50 => '#eff6ff',
            100 => '#dbeafe',
            200 => '#bfdbfe',
            300 => '#93c5fd',
            400 => '#60a5fa',
            500 => '#3b82f6',
            600 => '#2563eb',
            700 => '#1d4ed8',
            800 => '#1e40af',
            900 => '#1e3a8a',
        ],
        'purple' => [
            50 => '#faf5ff',
            100 => '#f3e8ff',
            200 => '#e9d5ff',
            300 => '#d8b4fe',
            400 => '#c084fc',
            500 => '#a855f7',
            600 => '#9333ea',
            700 => '#7e22ce',
            800 => '#6b21a8',
            900 => '#581c87',
        ],
        'pink' => [
            50 => '#fdf2f8',
            100 => '#fce7f3',
            200 => '#fbcfe8',
            300 => '#f9a8d4',
            400 => '#f472b6',
            500 => '#ec4899',
            600 => '#db2777',
            700 => '#be185d',
            800 => '#9f1239',
            900 => '#831843',
        ],
        'green' => [
            50 => '#f0fdf4',
            100 => '#dcfce7',
            200 => '#bbf7d0',
            300 => '#86efac',
            400 => '#4ade80',
            500 => '#22c55e',
            600 => '#16a34a',
            700 => '#15803d',
            800 => '#166534',
            900 => '#14532d',
        ],
        'orange' => [
            50 => '#fff7ed',
            100 => '#ffedd5',
            200 => '#fed7aa',
            300 => '#fdba74',
            400 => '#fb923c',
            500 => '#f97316',
            600 => '#ea580c',
            700 => '#c2410c',
            800 => '#9a3412',
            900 => '#7c2d12',
        ],
        'cyan' => [
            50 => '#ecfeff',
            100 => '#cffafe',
            200 => '#a5f3fc',
            300 => '#67e8f9',
            400 => '#22d3ee',
            500 => '#06b6d4',
            600 => '#0891b2',
            700 => '#0e7490',
            800 => '#155e75',
            900 => '#164e63',
        ],
        'rose' => [
            50 => '#fff1f2',
            100 => '#ffe4e6',
            200 => '#fecdd3',
            300 => '#fda4af',
            400 => '#fb7185',
            500 => '#f43f5e',
            600 => '#e11d48',
            700 => '#be123c',
            800 => '#9f1239',
            900 => '#881337',
        ],
    ];

    /**
     * Get border color style
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getBorderColor($color, $shade = 100)
    {
        $hex = self::getColorHexInternal($color, $shade);
        return $hex ? "border-color: {$hex};" : '';
    }

    /**
     * Get background color style
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getBackgroundColor($color, $shade = 50)
    {
        $hex = self::getColorHexInternal($color, $shade);
        return $hex ? "background-color: {$hex};" : '';
    }

    /**
     * Get text color style
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getTextColor($color, $shade = 600)
    {
        $hex = self::getColorHexInternal($color, $shade);
        return $hex ? "color: {$hex};" : '';
    }

    /**
     * Get gradient background style (from-to)
     *
     * @param string $color
     * @param int $fromShade
     * @param int $toShade
     * @return string
     */
    public static function getGradientBackground($color, $fromShade = 50, $toShade = 100)
    {
        $fromHex = self::getColorHexInternal($color, $fromShade);
        $toHex = self::getColorHexInternal($color, $toShade);
        
        if ($fromHex && $toHex) {
            return "background: linear-gradient(to bottom right, {$fromHex}, {$toHex});";
        }
        
        return '';
    }

    /**
     * Get gradient background with opacity (from-to)
     *
     * @param string $color
     * @param int $fromShade
     * @param int $toShade
     * @param float $opacity
     * @return string
     */
    public static function getGradientBackgroundWithOpacity($color, $fromShade = 500, $toShade = 500, $opacity = 0.1)
    {
        $fromHex = self::getColorHexInternal($color, $fromShade);
        $toHex = self::getColorHexInternal($color, $toShade);
        
        if ($fromHex && $toHex) {
            $fromRgba = self::hexToRgba($fromHex, $opacity);
            $toRgba = self::hexToRgba($toHex, $opacity);
            return "background: linear-gradient(to bottom right, {$fromRgba}, {$toRgba});";
        }
        
        return '';
    }

    /**
     * Get color hex value (public wrapper)
     *
     * @param string $color
     * @param int $shade
     * @return string|null
     */
    public static function getColorHex($color, $shade)
    {
        return self::getColorHexInternal($color, $shade);
    }

    /**
     * Get color hex value
     *
     * @param string $color
     * @param int $shade
     * @return string|null
     */
    private static function getColorHexInternal($color, $shade)
    {
        $color = strtolower($color);
        
        if (!isset(self::$colorMap[$color])) {
            return null;
        }
        
        if (!isset(self::$colorMap[$color][$shade])) {
            return null;
        }
        
        return self::$colorMap[$color][$shade];
    }

    /**
     * Convert hex to rgba
     *
     * @param string $hex
     * @param float $opacity
     * @return string
     */
    private static function hexToRgba($hex, $opacity = 1.0)
    {
        $hex = str_replace('#', '', $hex);
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        
        return "rgba({$r}, {$g}, {$b}, {$opacity})";
    }

    /**
     * Get safe Tailwind class name for border
     * This is a fallback if you want to use classes instead of inline styles
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getBorderClass($color, $shade = 100)
    {
        return "border-{$color}-{$shade}";
    }

    /**
     * Get safe Tailwind class name for background
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getBackgroundClass($color, $shade = 50)
    {
        return "bg-{$color}-{$shade}";
    }

    /**
     * Get safe Tailwind class name for text
     *
     * @param string $color
     * @param int $shade
     * @return string
     */
    public static function getTextClass($color, $shade = 600)
    {
        return "text-{$color}-{$shade}";
    }
}

