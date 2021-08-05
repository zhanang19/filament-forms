<?php

namespace Filament\Forms2\Components;

class Field extends Component implements Contracts\CanBeValidated
{
    use Concerns\CanBeAutofocused;
    use Concerns\CanBeValidated;
    use Concerns\HasHelperText;
    use Concerns\HasHint;
    use Concerns\HasLabel;
    use Concerns\HasStateBindingModifiers;

    final public function __construct(string $name)
    {
        $this->statePath($name);
    }

    public static function make(string $name): static
    {
        $static = new static($name);
        $static->setUp();

        return $static;
    }

    public function setUp(): void
    {
    }

    public function getId(): ?string
    {
        return parent::getId() ?? $this->getStatePath();
    }
}
