<?php namespace Opilo\Postman\Webhooks;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Opilo\Postman\Repositories\WebhookRepository as WebhookRepository;

class AddWebhookCommandHandler {
    use DispatchableTrait;

    public function __construct(WebhookRepository $WebhookRepository)
    {
        $this->WebhookRepository = $WebhookRepository;
    }
    public function handle($command)
    {
        $webhook = $this->WebhookRepository->makeNew(
            $command->uid,
            $command->url,
            $command->pattern,
            $command->group
        );

        return $webhook;
    }
} 