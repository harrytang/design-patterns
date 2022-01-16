/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractWelcomeEmailTemplate from './../abstract-welcome-email-template';

class WelcomeEmailTemplate extends AbstractWelcomeEmailTemplate {
  toHtml(): string {
    return `<p>Hi ${this.name}, welcome to powerkernel.com</p>`;
  }
  toText(): string {
    return `Hi ${this.name}, welcome to powerkernel.com`;
  }
}

export default WelcomeEmailTemplate;
