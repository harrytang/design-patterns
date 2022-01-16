/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractOtpEmailTemplate from './../abstract-otp-email-template';

class OtpEmailTemplate extends AbstractOtpEmailTemplate {
  toHtml(): string {
    return `<p>Mã Mã OTP của bạn là ${this.code}</p>`;
  }
  toText(): string {
    return `Mã Mã OTP của bạn là ${this.code}`;
  }
}

export default OtpEmailTemplate;