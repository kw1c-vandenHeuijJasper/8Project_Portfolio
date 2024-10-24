<?php

namespace App\Observers;

use App\Models\Client;

class ClientObserver
{
    protected function getColor()
    {
        return fake()->rgbCssColor();
    }

    /**
     * Handle the Client "created" event.
     */
    public function created(Client $client): void
    {
        $client->color = $client->color ?? self::getColor();
        $client->save();
    }

    /**
     * Handle the Client "updating" event.
     */
    public function updating(Client $client): void
    {
        $client->color = $client->color ?? self::getColor();
    }

    /**
     * Handle the Client "updated" event.
     */
    public function updated(Client $client): void
    {
        redirect('/admin/clients/' . $client->id . '/edit');
    }

    /**
     * Handle the Client "deleted" event.
     */
    public function deleted(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "restored" event.
     */
    public function restored(Client $client): void
    {
        //
    }

    /**
     * Handle the Client "force deleted" event.
     */
    public function forceDeleted(Client $client): void
    {
        //
    }
}
