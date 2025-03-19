<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public bool $dismissible;

    protected array $types = [
        "info",
        "danger",
        "success"
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = "info", bool $dismissible = false)
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    public function validType(): string
    {
        return in_array($this->type, $this->types) ? $this->type : "info";
    }

    public function link($text, $target = "#"): HtmlString
    {
        return new HtmlString('<a href="' . e($target) . '" class="alert-link">' . e($text) . '</a>');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}


