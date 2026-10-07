# John Radford

_DevOps Engineer & Systems Programmer_

johnlradford@proton.me · +1 412-780-2053 · Pittsburgh, PA · [https://johnlradford.io](https://johnlradford.io) · https://github.com/BlueSquare23 · https://www.linkedin.com/in/johnlradford

## Summary

DevOps engineer and systems programmer with 7+ years at a production web hosting company. Applies computer science fundamentals and insightful technical leadership to build internal tooling, automation, and secure infrastructure end-to-end, from distributed **KVM** clusters to custom **RAG** pipelines, with an emphasis on coding clean user experience for internal teams. Writes production **Perl**, **Python**, and **Go**. Mentors junior staff, admins Linux systems, and ships full-stack tools and applications.

## Skills

- **Programming Languages: Perl, Python, GoLang, Bash, PHP, JS/TS**
- **CI/CD & IaC Tools: Gitlab, Github Actions, Jenkins, Puppet, Ansible, Terraform**
- **Web Frameworks: Perl PSGI, Perl Mojo, Python Flask, NodeJS, Go net/http**
- **Operating Systems: Linux (RHEL/Ubuntu), FreeBSD**

## Experience

###  Pair Networks, Inc. — DevOps Engineer & SysAdmin (Jan 2023 – May 2026)

_Pittsburgh PA_

- Built **CI/CD** pipelines with **Puppet** and **Ansible** (IaC/CaC/MaC), with monitoring via **Icinga2** and **ELK**, deployed using **GitOps**.
- Designed & built a **Virtual Resource Manager** (Perl) spanning 2 network segments, 40+ host systems, and thousands of guest VMs. Featured per-host REST API agents for CPU/mem/guest stats, a custom weighted-average rebalancing algorithm, and an interactive REPL CLI (vrmctl) for manipulating the **QEMU/KVM** clusters.
- Developed a **custom RAG pipeline** (Python): ingested docs from GitLab, wikis, and knowledge bases; chunked, vectorized, and stored in ChromaDB; deployed tailored internal LLMs to assist support staff.
- Built a **centralized IP threat intelligence system**: Perl modules querying 3 public threat intelligence APIs, persisted to a central store with Redis caching to eliminate redundant external calls.

- Integrated **Nginx/Apache rate limiting** into the Puppet build system; built a quality assurance pipeline for false-positive monitoring, with graphing (**GnuPlot**), and threshold tuning.
- Developed a **KPI metrics pipeline**: automated collection of core business metrics from billing and account systems into a central database, eliminating a recurring 1-2 hour manual reporting task each quarter.
- Integrated **CloudLinux** into the legacy build system and **Puppet**; built LVE fault reporting tooling, custom control panel integrations, and an **Ansible** playbook for fleet-wide deployment.
- Developed a **centralized web statistics pipeline**: Perl modules parsing raw access logs into structured JSON aggregated across the entire fleet via Ansible.

- Automated **SSL** renewal notifications, replacing a manual process and saving an estimated 200+ hours (roughly $10-15K) per year.

### Pair Networks, Inc. — NOC & SOC Engineer (Jan 2020 – Dec 2022)

_Pittsburgh PA_

- Promoted to concurrent **Security** and **NOC** roles: monitored, detected, and remediated intrusions; triaged live production server incidents (hardware and software).
- Simultaneously handled Level 2 support, abuse team, and internal account migrations tickets.
- Helped maintain the internal **ELK** centralized logging stack and **SOC/SIEM** monitoring infrastructure.

### Pair Networks, Inc. — Support Technician - Lvl 2 (Aug 2018 – Dec 2019)

_Pittsburgh PA_

- Resolved customer issues across web hosting (**LAMP**), email, DNS, domain registration, databases (**MySQL**), and PHP configurations.

- Built deep **Linux** & **FreeBSD** hosting expertise across the full web stack that underpins all subsequent engineering roles.

## Education

### University of Pittsburgh - Greensburg — B.A., Major: Humanities Gen (Philosophy, Art History, Classical Literature); Minor: Political Science (Aug 2014 – Dec 2017)

_Grade: GPA: 3.8_

## Projects

### Web-LGSM

A web portal for managing Linux game servers.

[https://github.com/BlueSquare23/web-lgsm](https://github.com/BlueSquare23/web-lgsm)

### Term::ReadLine::Repl

A batteries included interactive Term::ReadLine REPL module published to CPAN.

[https://metacpan.org/pod/Term::ReadLine::Repl](https://metacpan.org/pod/Term::ReadLine::Repl)
