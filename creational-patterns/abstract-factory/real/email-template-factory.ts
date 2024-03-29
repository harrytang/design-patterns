/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractOtpEmailTemplate from './templates/abstract-otp-email-template';
import AbstractWelcoemEmailTemplate from './templates/abstract-welcome-email-template';

interface EmailTemplateFactory {
  createOtpEmailTemplate(code: string): AbstractOtpEmailTemplate;
  createWelcomeEmailTemplate(name: string): AbstractWelcoemEmailTemplate;
}

export default EmailTemplateFactory;
