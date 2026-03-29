<?php

namespace Framework\ORM;

class Model
{
    protected static string $table;
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __get(string $key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function __set(string $key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public static function table(): string
    {
        if (empty(static::$table)) {
            $class = basename(str_replace('\\', '/', static::class));
            return strtolower($class) . 's';
        }

        return static::$table;
    }

    public static function storagePath(): string
    {
        $dir = __DIR__ . '/../../storage/orm';
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        return $dir . '/' . static::table() . '.json';
    }

    public static function all(): array
    {
        $path = static::storagePath();
        if (!file_exists($path)) {
            return [];
        }

        $items = json_decode(file_get_contents($path), true);
        if (!is_array($items)) {
            return [];
        }

        return array_map(fn($attrs) => new static($attrs), $items);
    }

    public static function find($id): ?self
    {
        foreach (static::all() as $item) {
            if (($item->id ?? null) == $id) {
                return $item;
            }
        }

        return null;
    }

    public function save(): self
    {
        $items = static::all();

        if (empty($this->attributes['id'])) {
            $this->attributes['id'] = count($items) + 1;
            $items[] = $this->attributes;
        } else {
            foreach ($items as $idx => $row) {
                if (($row['id'] ?? null) == $this->attributes['id']) {
                    $items[$idx] = $this->attributes;
                    break;
                }
            }
        }

        file_put_contents(static::storagePath(), json_encode(array_values($items), JSON_PRETTY_PRINT));

        return $this;
    }

    public static function where(string $field, $value): array
    {
        return array_filter(static::all(), fn($item) => ($item->$field ?? null) == $value);
    }
}
