<?php

namespace App\Entity\SessionStatus;

use Symfony\Contracts\Translation\TranslatableInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

enum Status: string implements TranslatableInterface
{
    case InProgress = "IN PROGRESS";
    case Paused = "PAUSED";
    case Stopped = "STOPPED";

    public function trans(TranslatorInterface $translator, string $locale = null): string
    {
        //return $translator->trans($this->name, locale: $locale);

        return match ($this) {
            self::InProgress  => $translator->trans('En charge', locale: $locale),
            self::Paused => $translator->trans('En pause', locale: $locale),
            self::Stopped  => $translator->trans('Finie', locale: $locale),
        };
    }
}