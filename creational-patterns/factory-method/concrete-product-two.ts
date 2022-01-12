/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import Product from './product';

class ConcreteProductTwo implements Product {
  public operation(): string {
    return '{Result of the ConcreteProductTwo}';
  }
}

export default ConcreteProductTwo;
