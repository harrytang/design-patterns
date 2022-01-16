/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractHandler from './abstract-handler';

class MonkeyHandler extends AbstractHandler {
  public handle(request: string): string | null {
    if (request === 'Banana') {
      return `Monkey: I'll eat the ${request}.`;
    }
    return super.handle(request);
  }
}

export default MonkeyHandler;
