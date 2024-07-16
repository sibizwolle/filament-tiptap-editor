<?php

namespace FilamentTiptapEditor\Concerns;

use Closure;

trait HasTitle
{
    protected bool | Closure $startsWithTitle = false;

    protected string | Closure | null $titlePlaceholder = null;

    public function startsWithTitle(bool $startsWithTitle = true): static
    {
        $this->startsWithTitle = $startsWithTitle;

        return $this;
    }

    public function getStartsWithTitle(): ?bool
    {
        return $this->evaluate($this->startsWithTitle) ?? false;
    }

    public function titlePlaceholder(string | Closure | null $placeholder): static
    {
        $this->titlePlaceholder = $placeholder;

        return $this;
    }

    public function getTitlePlaceholder(): ?string
    {
        return $this->evaluate($this->titlePlaceholder);
    }
}
