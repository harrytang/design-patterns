/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import ConcreteProductOne from './concrete-product-one';
import Creator from './creator';
import Product from './product';

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
class ConcreteCreatorOne extends Creator {
  /**
   * Note that the signature of the method still uses the abstract product
   * type, even though the concrete product is actually returned from the
   * method. This way the Creator can stay independent of concrete product
   * classes.
   */
  public factoryMethod(): Product {
    return new ConcreteProductOne();
  }
}

export default ConcreteCreatorOne;
