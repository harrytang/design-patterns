/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import Handler from './handler';

/**
 * The default chaining behavior can be implemented inside a base handler class.
 */
abstract class AbstractHandler implements Handler {
  private nextHandler: Handler | undefined;

  public setNext(handler: Handler): Handler {
    this.nextHandler = handler;
    // Returning a handler from here will let us link handlers in a
    // convenient way like this:
    // monkey.setNext(squirrel).setNext(dog);
    return handler;
  }

  public handle(request: string): string | null {
    if (this.nextHandler) {
      return this.nextHandler.handle(request);
    }

    return null;
  }
}

export default AbstractHandler;
