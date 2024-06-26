**Aimeos denial of service vulnerability in SaaS and marketplace setups**

**Base Score**: 5.5 Medium

**Vector**: CVSS:3.1/AV:N/AC:L/PR:H/UI:N/S:U/C:N/I:L/A:H

**Complexity**: Easy

**Affected Products**: aimeos-core (Aimeos e-commerce framework)

**Affected versions:**
>= 2024.04.1, < 2024.04.7 <br>
>= 2023.04.1, < 2023.10.17 <br>
>= 2022.04.1, < 2022.10.17 <br>

**Patched versions:** <br>
2024.04.7 <br>
2023.10.17 <br>
2022.10.17 <br>

**Author:** <br>
Shail Shah <br>
Twitter: https://twitter.com/ssshah2131 <br>
LinkedIn: https://www.linkedin.com/in/ssshah2131


**To Reproduce:**
1. In multivendor environment an attacker will login to the admin panel of his own shop. 
2. Go to Locales --> Locales menu.
3. Disable all available locales or modify them.
4. As soon as locales are disabled or modified by an attacker, it will be disabled or modified for other shops too.
5. If all locales are disabled in a shop, the shop homepage will not load and will show an error. This will lead to denial of service for other shops.

**Proof Of Concept:** https://drive.google.com/file/d/1dnDTQ4fogYAHtAFrF-0eTpj__olT5ky9/view?usp=sharing

**References:**
1. https://github.com/aimeos/aimeos-core/security/advisories/GHSA-xjm6-jfmg-qc6p
2. https://github.com/advisories/GHSA-xjm6-jfmg-qc6p
3. https://github.com/aimeos/aimeos-core/commit/66edb06a53e51d90e075aad1932811c53c40af6f
4. https://github.com/aimeos/aimeos-core/commit/69e2ea127c4e2fd2e756a80a16442bea0351a461
5. https://github.com/aimeos/aimeos-core/commit/e933345915fc0cfafc6a011b853bc0228a61a45f
6. https://github.com/aimeos/aimeos-core/compare/2022.10.16...2022.10.17
7. https://github.com/aimeos/aimeos-core/compare/2023.10.16...2023.10.17
8. https://github.com/aimeos/aimeos-core/compare/2024.04.6...2024.04.7
