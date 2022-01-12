/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import ConcreteProductTwo from './concrete-product-two';
import Creator from './creator';
import Product from './product';

class ConcreteCreatorTwo extends Creator {
  public factoryMethod(): Product {
    return new ConcreteProductTwo();
  }
}

export default ConcreteCreatorTwo;
