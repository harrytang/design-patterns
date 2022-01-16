/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import EmailTemplate from './email-template';

abstract class OtpEmailTemplate implements EmailTemplate {
  protected code: string;

  constructor(code: string) {
    this.code = code;
  }

  abstract toHtml(): string;
  abstract toText(): string;
}

export default OtpEmailTemplate;
