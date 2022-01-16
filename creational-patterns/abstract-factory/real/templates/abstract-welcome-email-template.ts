/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import EmailTemplate from './email-template';

abstract class AbstractWelcomeEmailTemplate implements EmailTemplate {
  protected name: string;

  constructor(name: string) {
    this.name = name;
  }
  abstract toHtml(): string;
  abstract toText(): string;
}

export default AbstractWelcomeEmailTemplate;
