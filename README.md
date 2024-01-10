# whmcs-currency-converter-hook
 This is ported from my whmcs portal. A hook and some tpl files to convert USD to BDT

For this hook to work, your WHMCS setup needs to fulfill the following conditions:
1. Your default currency has to be set to USD
2. Secondary currency has to be set to BDT
3. Your default template is set to twenty-one

Learn how to setup multiple currencies in WHMCS: https://help.whmcs.com/a/679759

Download the files, then paste and override the files to your WHMCS root directory. The only files you probably need to override are `invoicepdf.tpl` and `viewinvoice.tpl`

There are some hard coded 'BDT' strings in the TPLs. modify the lines according to your needs.
