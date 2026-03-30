<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $vacancies = [
            [
                'slug' => 'senior-product-designer',
                'company_name' => 'Northgrid',
                'team' => 'design',
                'employment_type' => 'full_time',
                'work_model' => 'remote',
                'experience_level' => 'senior',
                'title' => [
                    'en_US' => 'Senior Product Designer',
                    'pt_BR' => 'Pessoa Designer de Produto Sênior',
                    'es' => 'Diseñadora/o de Producto Senior',
                ],
                'excerpt' => [
                    'en_US' => 'Shape high-trust B2B workflows from discovery to polished UI details.',
                    'pt_BR' => 'Desenhe fluxos B2B de alta confiança, da descoberta aos detalhes finais da interface.',
                    'es' => 'Diseña flujos B2B de alta confianza, desde el discovery hasta los detalles finales de la interfaz.',
                ],
                'description' => [
                    'en_US' => 'You will partner with product and engineering leaders to define the next generation of onboarding, billing and analytics journeys for a fast-growing platform used by distributed operations teams.',
                    'pt_BR' => 'Você vai atuar junto às lideranças de produto e engenharia para definir a próxima geração das jornadas de onboarding, cobrança e analytics de uma plataforma em crescimento usada por equipes distribuídas de operações.',
                    'es' => 'Trabajarás junto a líderes de producto e ingeniería para definir la próxima generación de experiencias de onboarding, facturación y analítica para una plataforma en crecimiento usada por equipos distribuidos de operaciones.',
                ],
                'location' => [
                    'en_US' => 'Remote - Americas',
                    'pt_BR' => 'Remoto - Américas',
                    'es' => 'Remoto - Américas',
                ],
                'highlights' => [
                    'en_US' => ['Product-led team', 'Senior design peers', 'Clear salary range'],
                    'pt_BR' => ['Time orientado a produto', 'Pares de design sênior', 'Faixa salarial clara'],
                    'es' => ['Equipo orientado a producto', 'Pares senior de diseño', 'Rango salarial claro'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Lead end-to-end design for critical account setup and insights flows.',
                        'Facilitate weekly design reviews with PMs, engineers and customer success.',
                        'Translate ambiguous business goals into validated interaction patterns.',
                    ],
                    'pt_BR' => [
                        'Liderar o design ponta a ponta dos fluxos críticos de configuração de conta e insights.',
                        'Conduzir revisões semanais de design com PMs, engenharia e customer success.',
                        'Transformar objetivos de negócio ambíguos em padrões de interação validados.',
                    ],
                    'es' => [
                        'Liderar el diseño de punta a punta de los flujos críticos de configuración de cuenta e insights.',
                        'Facilitar revisiones semanales de diseño con PMs, ingeniería y customer success.',
                        'Traducir objetivos de negocio ambiguos en patrones de interacción validados.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        '5+ years designing complex SaaS products with strong systems thinking.',
                        'A portfolio that shows sharp visual craft and measurable product impact.',
                        'Comfort running interviews, synthesizing findings and defending trade-offs.',
                    ],
                    'pt_BR' => [
                        'Mais de 5 anos desenhando produtos SaaS complexos com forte pensamento sistêmico.',
                        'Portfólio que demonstre refinamento visual e impacto mensurável no produto.',
                        'Conforto para conduzir entrevistas, sintetizar aprendizados e defender trade-offs.',
                    ],
                    'es' => [
                        'Más de 5 años diseñando productos SaaS complejos con fuerte pensamiento sistémico.',
                        'Portafolio que muestre criterio visual sólido e impacto medible en producto.',
                        'Comodidad para conducir entrevistas, sintetizar hallazgos y defender trade-offs.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Home office stipend and co-working budget.',
                        'Mental health coverage and async-first collaboration culture.',
                        'Quarterly offsites with travel and accommodation covered.',
                    ],
                    'pt_BR' => [
                        'Auxílio home office e orçamento para co-working.',
                        'Cobertura de saúde mental e cultura de colaboração async-first.',
                        'Encontros trimestrais presenciais com viagem e hospedagem incluídas.',
                    ],
                    'es' => [
                        'Estipendio para home office y presupuesto de co-working.',
                        'Cobertura de salud mental y cultura de colaboración async-first.',
                        'Encuentros trimestrales presenciales con viaje y alojamiento cubiertos.',
                    ],
                ],
                'currency' => 'USD',
                'salary_min' => 125000,
                'salary_max' => 155000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Senior%20Product%20Designer',
                'is_featured' => true,
                'is_published' => true,
                'posted_at' => now()->subDays(2),
            ],
            [
                'slug' => 'staff-backend-engineer',
                'company_name' => 'HarborOS',
                'team' => 'engineering',
                'employment_type' => 'full_time',
                'work_model' => 'hybrid',
                'experience_level' => 'lead',
                'title' => [
                    'en_US' => 'Staff Backend Engineer',
                    'pt_BR' => 'Pessoa Engenheira Backend Staff',
                    'es' => 'Ingeniera/o Backend Staff',
                ],
                'excerpt' => [
                    'en_US' => 'Drive platform reliability, data integrations and API standards at scale.',
                    'pt_BR' => 'Lidere confiabilidade de plataforma, integrações de dados e padrões de API em escala.',
                    'es' => 'Impulsa confiabilidad de plataforma, integraciones de datos y estándares de API a escala.',
                ],
                'description' => [
                    'en_US' => 'This role anchors the architecture behind a logistics product that coordinates mission-critical operations across Latin America, balancing elegant code with practical delivery.',
                    'pt_BR' => 'Essa posição sustenta a arquitetura por trás de um produto de logística que coordena operações críticas em toda a América Latina, equilibrando código elegante com entrega pragmática.',
                    'es' => 'Este rol sostiene la arquitectura detrás de un producto logístico que coordina operaciones críticas en toda América Latina, equilibrando código elegante con entrega pragmática.',
                ],
                'location' => [
                    'en_US' => 'São Paulo, Brazil (Hybrid)',
                    'pt_BR' => 'São Paulo, Brasil (Híbrido)',
                    'es' => 'São Paulo, Brasil (Híbrido)',
                ],
                'highlights' => [
                    'en_US' => ['Critical systems', 'Hybrid engineering hub', 'Architecture ownership'],
                    'pt_BR' => ['Sistemas críticos', 'Hub híbrido de engenharia', 'Autonomia arquitetural'],
                    'es' => ['Sistemas críticos', 'Hub híbrido de ingeniería', 'Autonomía arquitectónica'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Own technical direction for high-volume service boundaries and observability.',
                        'Mentor senior engineers through architecture reviews and RFCs.',
                        'Improve resilience for event-driven workloads and external integrations.',
                    ],
                    'pt_BR' => [
                        'Definir a direção técnica de serviços de alto volume e observabilidade.',
                        'Mentorar pessoas engenheiras sênior em revisões de arquitetura e RFCs.',
                        'Aumentar a resiliência de cargas orientadas a eventos e integrações externas.',
                    ],
                    'es' => [
                        'Definir la dirección técnica de servicios de alto volumen y observabilidad.',
                        'Mentorear a ingenieras/os senior en revisiones de arquitectura y RFCs.',
                        'Mejorar la resiliencia de cargas orientadas a eventos e integraciones externas.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        'Deep experience with PHP, queues, SQL performance and distributed systems.',
                        'Proven track record designing APIs for multiple internal consumers.',
                        'Strong written communication for architecture proposals and retrospectives.',
                    ],
                    'pt_BR' => [
                        'Experiência sólida com PHP, filas, performance de SQL e sistemas distribuídos.',
                        'Histórico comprovado desenhando APIs para múltiplos consumidores internos.',
                        'Comunicação escrita forte para propostas de arquitetura e retrospectivas.',
                    ],
                    'es' => [
                        'Experiencia sólida con PHP, colas, performance de SQL y sistemas distribuidos.',
                        'Trayectoria comprobada diseñando APIs para múltiples consumidores internos.',
                        'Comunicación escrita fuerte para propuestas de arquitectura y retrospectivas.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Annual learning budget and conference reimbursement.',
                        'Flexible hybrid schedule with commuter support.',
                        'Performance bonus tied to team and company goals.',
                    ],
                    'pt_BR' => [
                        'Orçamento anual de aprendizado e reembolso para conferências.',
                        'Agenda híbrida flexível com apoio de deslocamento.',
                        'Bônus por desempenho atrelado a metas do time e da empresa.',
                    ],
                    'es' => [
                        'Presupuesto anual de aprendizaje y reembolso para conferencias.',
                        'Agenda híbrida flexible con apoyo de desplazamiento.',
                        'Bono por desempeño atado a metas del equipo y la empresa.',
                    ],
                ],
                'currency' => 'BRL',
                'salary_min' => 240000,
                'salary_max' => 300000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Staff%20Backend%20Engineer',
                'is_featured' => true,
                'is_published' => true,
                'posted_at' => now()->subDays(4),
            ],
            [
                'slug' => 'growth-marketing-lead',
                'company_name' => 'Signal Studio',
                'team' => 'growth',
                'employment_type' => 'full_time',
                'work_model' => 'remote',
                'experience_level' => 'lead',
                'title' => [
                    'en_US' => 'Growth Marketing Lead',
                    'pt_BR' => 'Pessoa Líder de Growth Marketing',
                    'es' => 'Líder de Growth Marketing',
                ],
                'excerpt' => [
                    'en_US' => 'Build a demand engine that blends paid, lifecycle and content programs.',
                    'pt_BR' => 'Construa uma máquina de demanda combinando mídia paga, lifecycle e conteúdo.',
                    'es' => 'Construye un motor de demanda que combine paid media, lifecycle y contenido.',
                ],
                'description' => [
                    'en_US' => 'You will join a product-led studio helping B2B founders tighten their positioning, improve conversion and scale repeatable pipeline generation without sounding generic.',
                    'pt_BR' => 'Você vai se juntar a um estúdio product-led que ajuda fundadores B2B a refinar posicionamento, melhorar conversão e escalar geração de pipeline de forma repetível sem soar genérico.',
                    'es' => 'Te sumarás a un estudio product-led que ayuda a founders B2B a afinar posicionamiento, mejorar conversión y escalar generación de pipeline repetible sin sonar genérico.',
                ],
                'location' => [
                    'en_US' => 'Remote - US & Latin America',
                    'pt_BR' => 'Remoto - EUA e América Latina',
                    'es' => 'Remoto - EE. UU. y América Latina',
                ],
                'highlights' => [
                    'en_US' => ['Narrative-driven campaigns', 'Cross-functional experiments', 'Lean team'],
                    'pt_BR' => ['Campanhas guiadas por narrativa', 'Experimentos cross-functional', 'Time enxuto'],
                    'es' => ['Campañas guiadas por narrativa', 'Experimentos cross-functional', 'Equipo ágil'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Own the growth roadmap across acquisition, activation and retention.',
                        'Partner with founders on messaging, campaign strategy and weekly reporting.',
                        'Stand up measurement frameworks that keep experimentation honest.',
                    ],
                    'pt_BR' => [
                        'Conduzir o roadmap de growth em aquisição, ativação e retenção.',
                        'Atuar com founders em mensagem, estratégia de campanha e reporting semanal.',
                        'Estruturar modelos de mensuração que mantenham a experimentação consistente.',
                    ],
                    'es' => [
                        'Liderar el roadmap de growth en adquisición, activación y retención.',
                        'Trabajar con founders en mensaje, estrategia de campañas y reporting semanal.',
                        'Montar marcos de medición que mantengan la experimentación honesta.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        '7+ years in growth or performance marketing for SaaS or tech-enabled services.',
                        'Hands-on experience with lifecycle automation, CRO and attribution.',
                        'Strong copy instincts and an eye for concise storytelling.',
                    ],
                    'pt_BR' => [
                        'Mais de 7 anos em growth ou performance marketing para SaaS ou serviços de tecnologia.',
                        'Experiência prática com automação de lifecycle, CRO e atribuição.',
                        'Bom repertório de copy e olhar apurado para storytelling conciso.',
                    ],
                    'es' => [
                        'Más de 7 años en growth o performance marketing para SaaS o servicios tech.',
                        'Experiencia hands-on con automatización de lifecycle, CRO y atribución.',
                        'Buen criterio de copy y ojo para storytelling conciso.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Four-day workweek every other month for deep planning.',
                        'Profit-sharing after the first year.',
                        'Equipment stipend plus annual wellness reimbursement.',
                    ],
                    'pt_BR' => [
                        'Semana de quatro dias a cada dois meses para planejamento profundo.',
                        'Participação nos lucros após o primeiro ano.',
                        'Auxílio equipamento e reembolso anual de bem-estar.',
                    ],
                    'es' => [
                        'Semana de cuatro días cada dos meses para planificación profunda.',
                        'Participación en ganancias después del primer año.',
                        'Apoyo para equipamiento y reembolso anual de bienestar.',
                    ],
                ],
                'currency' => 'USD',
                'salary_min' => 110000,
                'salary_max' => 135000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Growth%20Marketing%20Lead',
                'is_featured' => true,
                'is_published' => true,
                'posted_at' => now()->subDays(6),
            ],
            [
                'slug' => 'product-manager-ai-workflows',
                'company_name' => 'OrbitFlow',
                'team' => 'product',
                'employment_type' => 'full_time',
                'work_model' => 'remote',
                'experience_level' => 'senior',
                'title' => [
                    'en_US' => 'Product Manager, AI Workflows',
                    'pt_BR' => 'Pessoa Product Manager, Fluxos com IA',
                    'es' => 'Product Manager, Flujos con IA',
                ],
                'excerpt' => [
                    'en_US' => 'Turn messy internal operations into assistive workflows with practical AI.',
                    'pt_BR' => 'Transforme operações internas complexas em fluxos assistidos por IA prática.',
                    'es' => 'Convierte operaciones internas complejas en flujos asistidos por IA práctica.',
                ],
                'description' => [
                    'en_US' => 'OrbitFlow is building assistive tools for internal teams that need speed, trust and traceability. You will decide where AI adds leverage and where classic product discipline matters more.',
                    'pt_BR' => 'A OrbitFlow está criando ferramentas assistivas para times internos que precisam de velocidade, confiança e rastreabilidade. Você vai decidir onde IA gera alavancagem e onde disciplina clássica de produto pesa mais.',
                    'es' => 'OrbitFlow está construyendo herramientas asistivas para equipos internos que necesitan velocidad, confianza y trazabilidad. Decidirás dónde la IA genera ventaja y dónde la disciplina clásica de producto pesa más.',
                ],
                'location' => [
                    'en_US' => 'Remote - UTC-5 to UTC+2',
                    'pt_BR' => 'Remoto - UTC-5 a UTC+2',
                    'es' => 'Remoto - UTC-5 a UTC+2',
                ],
                'highlights' => [
                    'en_US' => ['Applied AI', 'Research-heavy roadmap', 'High autonomy'],
                    'pt_BR' => ['IA aplicada', 'Roadmap orientado a pesquisa', 'Alta autonomia'],
                    'es' => ['IA aplicada', 'Roadmap guiado por investigación', 'Alta autonomía'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Prioritize problems worth automating across ops, support and finance.',
                        'Write crisp product briefs that balance experimentation and compliance.',
                        'Coordinate discovery across design, engineering and subject-matter experts.',
                    ],
                    'pt_BR' => [
                        'Priorizar problemas que realmente valem automação em operações, suporte e finanças.',
                        'Escrever briefs objetivos equilibrando experimentação e compliance.',
                        'Coordenar discovery entre design, engenharia e especialistas do domínio.',
                    ],
                    'es' => [
                        'Priorizar problemas que realmente valga automatizar en operaciones, soporte y finanzas.',
                        'Escribir briefs claros equilibrando experimentación y compliance.',
                        'Coordinar discovery entre diseño, ingeniería y especialistas del dominio.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        'Experience shipping workflow or automation products in ambiguous spaces.',
                        'Ability to reason about data quality, model feedback loops and operational risk.',
                        'Excellent facilitation and prioritization skills.',
                    ],
                    'pt_BR' => [
                        'Experiência lançando produtos de workflow ou automação em contextos ambíguos.',
                        'Capacidade de raciocinar sobre qualidade de dados, feedback loops de modelo e risco operacional.',
                        'Excelente facilitação e priorização.',
                    ],
                    'es' => [
                        'Experiencia lanzando productos de workflow o automatización en contextos ambiguos.',
                        'Capacidad para razonar sobre calidad de datos, feedback loops de modelo y riesgo operacional.',
                        'Excelente facilitación y priorización.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Twice-a-year strategy retreats in Europe or Latin America.',
                        'Private healthcare and generous parental leave.',
                        'Dedicated monthly time for exploration and prototyping.',
                    ],
                    'pt_BR' => [
                        'Retiros estratégicos duas vezes por ano na Europa ou América Latina.',
                        'Plano de saúde privado e licença parental generosa.',
                        'Tempo mensal dedicado para exploração e prototipagem.',
                    ],
                    'es' => [
                        'Retiros estratégicos dos veces al año en Europa o América Latina.',
                        'Cobertura médica privada y licencia parental generosa.',
                        'Tiempo mensual dedicado a exploración y prototipado.',
                    ],
                ],
                'currency' => 'EUR',
                'salary_min' => 85000,
                'salary_max' => 105000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Product%20Manager%20AI%20Workflows',
                'is_featured' => false,
                'is_published' => true,
                'posted_at' => now()->subDays(8),
            ],
            [
                'slug' => 'frontend-engineer-design-systems',
                'company_name' => 'Linea Cloud',
                'team' => 'engineering',
                'employment_type' => 'contract',
                'work_model' => 'remote',
                'experience_level' => 'senior',
                'title' => [
                    'en_US' => 'Frontend Engineer, Design Systems',
                    'pt_BR' => 'Pessoa Engenheira Frontend, Design Systems',
                    'es' => 'Ingeniera/o Frontend, Design Systems',
                ],
                'excerpt' => [
                    'en_US' => 'Raise interface quality and delivery speed through resilient component foundations.',
                    'pt_BR' => 'Aumente a qualidade da interface e a velocidade de entrega com uma base sólida de componentes.',
                    'es' => 'Eleva la calidad de la interfaz y la velocidad de entrega con una base sólida de componentes.',
                ],
                'description' => [
                    'en_US' => 'Join a platform team modernizing the UI surface of a finance product used across multiple regions, with a special focus on accessibility and maintainability.',
                    'pt_BR' => 'Junte-se a um time de plataforma modernizando a superfície de UI de um produto financeiro usado em múltiplas regiões, com foco especial em acessibilidade e manutenção.',
                    'es' => 'Súmate a un equipo de plataforma que moderniza la superficie UI de un producto financiero usado en múltiples regiones, con foco especial en accesibilidad y mantenibilidad.',
                ],
                'location' => [
                    'en_US' => 'Remote - Europe',
                    'pt_BR' => 'Remoto - Europa',
                    'es' => 'Remoto - Europa',
                ],
                'highlights' => [
                    'en_US' => ['Accessibility focus', 'Design system ownership', 'Contract flexibility'],
                    'pt_BR' => ['Foco em acessibilidade', 'Ownership de design system', 'Flexibilidade contratual'],
                    'es' => ['Foco en accesibilidad', 'Ownership de design system', 'Flexibilidad contractual'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Build and document reusable components across product squads.',
                        'Partner with designers to define tokens, patterns and implementation guardrails.',
                        'Improve frontend quality standards, testing and release confidence.',
                    ],
                    'pt_BR' => [
                        'Construir e documentar componentes reutilizáveis para múltiplos squads.',
                        'Atuar com design na definição de tokens, padrões e guardrails de implementação.',
                        'Elevar padrões de qualidade frontend, testes e confiança em releases.',
                    ],
                    'es' => [
                        'Construir y documentar componentes reutilizables para múltiples squads.',
                        'Trabajar con diseño en la definición de tokens, patrones y guardrails de implementación.',
                        'Elevar estándares de calidad frontend, testing y confianza en releases.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        'Strong React or Vue experience plus excellent CSS architecture instincts.',
                        'Comfort building component APIs and documentation that others can trust.',
                        'Experience working closely with accessibility standards and audits.',
                    ],
                    'pt_BR' => [
                        'Experiência forte com React ou Vue e ótimo repertório de arquitetura CSS.',
                        'Conforto para construir APIs de componentes e documentação realmente útil.',
                        'Experiência próxima a padrões e auditorias de acessibilidade.',
                    ],
                    'es' => [
                        'Experiencia sólida con React o Vue y muy buen criterio de arquitectura CSS.',
                        'Comodidad para construir APIs de componentes y documentación confiable.',
                        'Experiencia cercana a estándares y auditorías de accesibilidad.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Flexible six-month contract with extension path.',
                        'Async collaboration with low meeting load.',
                        'Paid setup budget on day one.',
                    ],
                    'pt_BR' => [
                        'Contrato flexível de seis meses com possibilidade de extensão.',
                        'Colaboração assíncrona com baixa carga de reuniões.',
                        'Orçamento de setup pago desde o primeiro dia.',
                    ],
                    'es' => [
                        'Contrato flexible de seis meses con posibilidad de extensión.',
                        'Colaboración asíncrona con baja carga de reuniones.',
                        'Presupuesto de setup pagado desde el primer día.',
                    ],
                ],
                'currency' => 'EUR',
                'salary_min' => 70000,
                'salary_max' => 90000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Frontend%20Engineer%20Design%20Systems',
                'is_featured' => false,
                'is_published' => true,
                'posted_at' => now()->subDays(11),
            ],
            [
                'slug' => 'brand-content-strategist',
                'company_name' => 'Canvas Loop',
                'team' => 'growth',
                'employment_type' => 'full_time',
                'work_model' => 'remote',
                'experience_level' => 'mid',
                'title' => [
                    'en_US' => 'Brand Content Strategist',
                    'pt_BR' => 'Pessoa Estrategista de Conteúdo de Marca',
                    'es' => 'Estratega de Contenido de Marca',
                ],
                'excerpt' => [
                    'en_US' => 'Create editorial systems that make technical products feel clear and human.',
                    'pt_BR' => 'Crie sistemas editoriais que tornem produtos técnicos claros e humanos.',
                    'es' => 'Crea sistemas editoriales que hagan que productos técnicos se sientan claros y humanos.',
                ],
                'description' => [
                    'en_US' => 'Canvas Loop helps infrastructure companies communicate with more precision and warmth. This role blends editorial judgment, interviewing and content operations.',
                    'pt_BR' => 'A Canvas Loop ajuda empresas de infraestrutura a se comunicarem com mais precisão e calor humano. A função combina critério editorial, entrevistas e operações de conteúdo.',
                    'es' => 'Canvas Loop ayuda a compañías de infraestructura a comunicarse con más precisión y calidez. El rol combina criterio editorial, entrevistas y operaciones de contenido.',
                ],
                'location' => [
                    'en_US' => 'Remote - Latin America',
                    'pt_BR' => 'Remoto - América Latina',
                    'es' => 'Remoto - América Latina',
                ],
                'highlights' => [
                    'en_US' => ['Editorial ownership', 'Interview-rich work', 'Remote-first team'],
                    'pt_BR' => ['Ownership editorial', 'Trabalho com muitas entrevistas', 'Time remote-first'],
                    'es' => ['Ownership editorial', 'Trabajo con muchas entrevistas', 'Equipo remote-first'],
                ],
                'responsibilities' => [
                    'en_US' => [
                        'Develop editorial themes tied to positioning and product launches.',
                        'Interview founders, customers and internal experts to surface sharp narratives.',
                        'Maintain a publishing cadence with strong quality control.',
                    ],
                    'pt_BR' => [
                        'Desenvolver temas editoriais conectados ao posicionamento e lançamentos do produto.',
                        'Entrevistar founders, clientes e especialistas internos para revelar narrativas fortes.',
                        'Manter uma cadência de publicação com alto controle de qualidade.',
                    ],
                    'es' => [
                        'Desarrollar temas editoriales conectados al posicionamiento y lanzamientos del producto.',
                        'Entrevistar founders, clientes y especialistas internos para revelar narrativas fuertes.',
                        'Mantener una cadencia de publicación con alto control de calidad.',
                    ],
                ],
                'requirements' => [
                    'en_US' => [
                        'Experience in editorial strategy, branded content or B2B storytelling.',
                        'Excellent interviewing and synthesis skills.',
                        'Strong writing portfolio with clear voice and structure.',
                    ],
                    'pt_BR' => [
                        'Experiência em estratégia editorial, branded content ou storytelling B2B.',
                        'Excelente capacidade de entrevista e síntese.',
                        'Portfólio de escrita com voz clara e boa estrutura.',
                    ],
                    'es' => [
                        'Experiencia en estrategia editorial, branded content o storytelling B2B.',
                        'Excelente capacidad de entrevista y síntesis.',
                        'Portafolio de escritura con voz clara y buena estructura.',
                    ],
                ],
                'benefits' => [
                    'en_US' => [
                        'Annual retreat focused on craft and editorial planning.',
                        'Learning stipend for books, courses and workshops.',
                        'Flexible schedule designed for deep work blocks.',
                    ],
                    'pt_BR' => [
                        'Retiro anual focado em repertório e planejamento editorial.',
                        'Bolsa de aprendizado para livros, cursos e workshops.',
                        'Agenda flexível desenhada para blocos de trabalho profundo.',
                    ],
                    'es' => [
                        'Retiro anual enfocado en craft y planificación editorial.',
                        'Bolsa de aprendizaje para libros, cursos y workshops.',
                        'Agenda flexible diseñada para bloques de trabajo profundo.',
                    ],
                ],
                'currency' => 'USD',
                'salary_min' => 65000,
                'salary_max' => 80000,
                'salary_period' => 'yearly',
                'application_url' => 'mailto:careers@atlashire.test?subject=Brand%20Content%20Strategist',
                'is_featured' => false,
                'is_published' => true,
                'posted_at' => now()->subDays(13),
            ],
        ];

        foreach ($vacancies as $vacancy) {
            Vacancy::query()->updateOrCreate(
                ['slug' => $vacancy['slug']],
                $vacancy,
            );
        }
    }
}
