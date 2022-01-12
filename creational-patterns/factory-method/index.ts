/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import ConcreteCreatorOne from './concrete-creator-one';
import ConcreteCreatorTwo from './concrete-creator-two';
import Creator from './creator';

const client = (creator: Creator) => {
  console.log("Client: I'm not aware of the creator's class, but it still works.");
  console.log(creator.someOperation());
};

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
console.log('App: Launched with the ConcreteCreatorOne.');
client(new ConcreteCreatorOne());
console.log('');

console.log('App: Launched with the ConcreteCreatorTwo.');
client(new ConcreteCreatorTwo());
