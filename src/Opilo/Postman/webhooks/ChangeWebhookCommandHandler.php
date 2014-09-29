<?php namespace Opilo\Postman\Webhooks;

use Laracasts\Commander\CommandHandler;
use Opilo\Postman\Repositories\WebhookRepository as WebhookRepository;

class ChangeWebhookCommandHandler {

    public function __construct(WebhookRepository $WebhookRepository)
    {
        $this->WebhookRepository = $WebhookRepository;
    }
    public function handle($command)
    {

        $webhook = $this->WebhookRepository->Change($command);

        return $webhook;
    }
} 