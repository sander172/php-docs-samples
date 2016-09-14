<?php
/**
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/pubsub/README.md
 */

namespace Google\Cloud\Samples\PubSub;

# [START list_subscriptions]
use Google\Cloud\ServiceBuilder;

/**
 * Lists all Pub/Sub subscriptions.
 *
 * @param string $projectId  The Google project ID.
 */
function list_subscriptions($projectId)
{
    $builder = new ServiceBuilder([
        'projectId' => $projectId,
    ]);
    $pubsub = $builder->pubsub();
    foreach ($pubsub->subscriptions() as $subscription) {
        printf('Subscription: %s' . PHP_EOL, $subscription->name());
    }
}
# [END list_subscriptions]