/**
 *
 * @export
 * @interface Subscription
 */
import { SubscriptionType } from './SubscriptionType'

class Subscription extends Model {
  /**
   * Type of the subscription.
* @var string
   * @memberof Subscription
   */
  type: SubscriptionType
  /**
   * ID of the subscription.
* @var string
   * @memberof Subscription
   */
  id: string
  /**
   * Additional attributes based on the subscription type.
* @var object
   * @memberof Subscription
   */
  attr: object
}

/**
 *
 * @export
 * @interface CreateSubscription
 */
class CreateSubscription extends Model {
  /**
   * Type of the subscription.
* @var string
   * @memberof Subscription
   */
  type: SubscriptionType
  /**
   * Additional attributes based on the subscription type.
* @var object
   * @memberof Subscription
   */
  attr: object
}

