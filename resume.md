# John L. Radford

[johnlradford23@gmail.com](mailto:johnlradford23@gmail.com) | [johnlradford.io](https://johnlradford.io) | [github.com/BlueSquare23](https://github.com/BlueSquare23)

## Summary

DevOps engineer and systems programmer with 6+ years at a production web hosting company. Builds internal tooling, automation, and infrastructure end-to-end — from distributed KVM clusters to custom RAG pipelines. Writes production Perl and Python, owns Linux systems, and ships full-stack internal tools.

## Technical Skills

**Languages:** Perl, Python, Bash, JavaScript  
**Infra & Ops:** Linux (RHEL/Ubuntu/FreeBSD), QEMU/KVM, Puppet, Ansible, Nginx, Apache, ELK Stack  
**Data & Caching:** MySQL/MariaDB, Redis, ChromaDB  
**Security & Networking:** SOC/SIEM, VPN, rate limiting, IP threat intelligence, HMAC auth  
**Tools:** GitLab CI/CD, Netbox, CloudLinux, Icinga2, SureMDM, REST APIs, Plack/PSGI

## Work Experience

### DevOps Specialist & Systems Administrator — Pair Networks, Inc.
**2023 – 2026**

- Built a **Virtual Resource Manager** (Perl): per-host REST API agents broadcasting live CPU/mem/guest stats, a weighted-average rebalancing algorithm, and an interactive REPL CLI (`vrmctl`) for manipulating the QEMU/KVM cluster.
- Developed a **custom RAG pipeline** (Python): ingested docs from GitLab, wikis, and knowledge bases; chunked, vectorized, and stored in ChromaDB; deployed tailored internal LLMs to assist support staff.
- Built a **centralized IP threat intelligence system**: Perl modules querying multiple public threat APIs, persisted to a central store with Redis caching to minimize redundant external calls.
- Developed a **Zendesk webhook API** (Perl Plack, HMAC-verified): auto-populated ticket fields from a username or account number, eliminating manual lookup for the entire support team.
- Integrated **Nginx/Apache rate limiting** into the Puppet build system; built a web stats pipeline for false-positive monitoring and threshold tuning.
- Developed a **KPI metrics pipeline**: automated collection of core business metrics from billing and account systems into a central database, replacing ad-hoc executive reporting.

### NOC & Security Technician — Pair Networks, Inc.
**2020 – 2023**

- Promoted to concurrent Security and NOC roles: monitored, detected, and remediated intrusions; triaged live production server incidents (hardware and software).
- Simultaneously handled Level 2 support, abuse team, and internal account migrations.

### Support Technician — Pair Networks, Inc.
**2018 – 2020**

- Resolved customer issues across web hosting, email, DNS, databases, and PHP.
- Built deep Linux hosting expertise that underpins all subsequent engineering roles.

## Open Source

[Web-LGSM](https://github.com/BlueSquare23/web-lgsm) — web portal for managing Linux game servers  
[Term::ReadLine::Repl](https://metacpan.org/pod/Term::ReadLine::Repl) — published CPAN REPL module; used in production `vrmctl` tooling  
[Acme::Shotgun](https://metacpan.org/pod/Acme::Shotgun) — published CPAN module

## Education

**University of Pittsburgh** — B.A., Humanities; Minor in Political Science *(2017)*
