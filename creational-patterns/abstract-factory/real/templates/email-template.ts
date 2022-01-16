/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

interface EmailTemplate {
  toHtml(): string;
  toText(): string;
}

export default EmailTemplate;