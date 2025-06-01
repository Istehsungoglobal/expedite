<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Information Technology',
                'description' => 'Software & digital services. Primary activities include software development, IT consulting, and data management. Key products are software applications, cloud services, and cybersecurity solutions. Business models include SaaS, subscription, and project-based. Target customers range from individual consumers to large enterprises. Organizational structures vary from startups to multinational corporations. Regulations include data privacy (GDPR, CCPA) and cybersecurity standards. Market trends include cloud computing, AI, and IoT. Representative companies are Microsoft, Google, and Amazon. Technology adoption is high, with ongoing digital transformation. Growth potential is strong, driven by increasing demand for digital solutions.',
                'slug' => 'information-technology',
                'icon' => 'fas fa-laptop-code',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Healthcare',
                'description' => 'Medical & health services. Core functions include patient care, medical research, and healthcare administration. Key services are hospital care, diagnostics, and pharmaceuticals. Business models include fee-for-service, managed care, and value-based care. Target customers are patients, healthcare providers, and insurance companies. Organizational structures include hospitals, clinics, and research institutions. Regulations include HIPAA, FDA, and CMS. Market trends include telehealth, personalized medicine, and digital health. Representative companies are Johnson & Johnson, UnitedHealth Group, and Pfizer. Technology adoption is increasing, with digital transformation in patient care and data management. Growth potential is stable, driven by aging populations and healthcare innovation.',
                'slug' => 'healthcare',
                'icon' => 'fas fa-heartbeat',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Financial Services',
                'description' => 'Banking & insurance. Primary activities include banking, investment management, and insurance. Key products are loans, insurance policies, and investment products. Business models include interest-based lending, fee-based services, and insurance premiums. Target customers range from individual consumers to large corporations. Organizational structures include banks, insurance companies, and investment firms. Regulations include Dodd-Frank, Basel III, and SEC. Market trends include fintech, digital banking, and blockchain. Representative companies are JPMorgan Chase, Bank of America, and Berkshire Hathaway. Technology adoption is high, with digital transformation in banking and investment. Growth potential is moderate, driven by economic growth and financial innovation.',
                'slug' => 'financial-services',
                'icon' => 'fas fa-university',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manufacturing',
                'description' => 'Industrial production. Core functions include production, assembly, and supply chain management. Key products are industrial machinery, consumer goods, and automotive parts. Business models include mass production, lean manufacturing, and custom manufacturing. Target customers are businesses, consumers, and government entities. Organizational structures include factories, assembly lines, and distribution centers. Regulations include OSHA, EPA, and product safety standards. Market trends include automation, robotics, and additive manufacturing. Representative companies are General Electric, Toyota, and Siemens. Technology adoption is increasing, with digital transformation in production and supply chain. Growth potential is moderate, driven by global demand and technological advancements.',
                'slug' => 'manufacturing',
                'icon' => 'fas fa-industry',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Retail',
                'description' => 'Consumer goods sales. Primary activities include sales, marketing, and distribution of consumer goods. Key products are clothing, electronics, and groceries. Business models include brick-and-mortar, e-commerce, and omnichannel retail. Target customers are individual consumers. Organizational structures include retail stores, online marketplaces, and distribution centers. Regulations include consumer protection laws, advertising standards, and data privacy. Market trends include e-commerce, mobile shopping, and personalized experiences. Representative companies are Walmart, Amazon, and Alibaba. Technology adoption is high, with digital transformation in sales and marketing. Growth potential is moderate, driven by consumer spending and e-commerce growth.',
                'slug' => 'retail',
                'icon' => 'fas fa-shopping-bag',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Energy',
                'description' => 'Oil, gas & renewables. Core functions include exploration, production, and distribution of energy resources. Key products are oil, natural gas, and renewable energy. Business models include exploration and production, refining and distribution, and renewable energy generation. Target customers are businesses, consumers, and government entities. Organizational structures include oil companies, utilities, and renewable energy developers. Regulations include environmental regulations, safety standards, and energy policies. Market trends include renewable energy, energy storage, and smart grids. Representative companies are ExxonMobil, Shell, and NextEra Energy. Technology adoption is increasing, with digital transformation in exploration and production. Growth potential is variable, driven by energy demand and environmental concerns.',
                'slug' => 'energy',
                'icon' => 'fas fa-bolt',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Telecommunications',
                'description' => 'Networks & connectivity. Primary activities include providing communication services and infrastructure. Key products are mobile services, internet access, and telecommunications equipment. Business models include subscription-based services, data plans, and equipment sales. Target customers range from individual consumers to large enterprises. Organizational structures include telecommunications companies, network operators, and equipment manufacturers. Regulations include telecommunications regulations, data privacy, and net neutrality. Market trends include 5G, IoT, and cloud communications. Representative companies are Verizon, AT&T, and China Mobile. Technology adoption is high, with ongoing digital transformation. Growth potential is moderate, driven by increasing demand for connectivity and digital services.',
                'slug' => 'telecommunications',
                'icon' => 'fas fa-signal',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Transportation & Logistics',
                'description' => 'Shipping & delivery. Core functions include transportation, warehousing, and supply chain management. Key services are shipping, freight, and logistics solutions. Business models include transportation services, warehousing, and supply chain management. Target customers are businesses, consumers, and government entities. Organizational structures include transportation companies, logistics providers, and distribution centers. Regulations include transportation regulations, safety standards, and customs regulations. Market trends include e-commerce logistics, last-mile delivery, and supply chain optimization. Representative companies are FedEx, UPS, and DHL. Technology adoption is increasing, with digital transformation in logistics and supply chain. Growth potential is strong, driven by e-commerce growth and global trade.',
                'slug' => 'transportation-logistics',
                'icon' => 'fas fa-truck',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Construction',
                'description' => 'Building & infrastructure. Primary activities include construction, renovation, and infrastructure development. Key products are buildings, roads, and infrastructure projects. Business models include construction contracts, project management, and real estate development. Target customers are businesses, government entities, and individual consumers. Organizational structures include construction companies, contractors, and engineering firms. Regulations include building codes, safety standards, and environmental regulations. Market trends include sustainable construction, modular construction, and BIM. Representative companies are Bechtel, Skanska, and Vinci. Technology adoption is increasing, with digital transformation in project management and construction processes. Growth potential is moderate, driven by infrastructure development and urbanization.',
                'slug' => 'construction',
                'icon' => 'fas fa-hard-hat',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Education',
                'description' => 'Learning & training. Core functions include teaching, research, and educational administration. Key services are schools, universities, and training programs. Business models include tuition fees, government funding, and research grants. Target customers are students, educators, and researchers. Organizational structures include schools, universities, and research institutions. Regulations include accreditation standards, education policies, and student privacy. Market trends include online learning, personalized education, and lifelong learning. Representative companies are Harvard University, Coursera, and Pearson. Technology adoption is increasing, with digital transformation in teaching and learning. Growth potential is moderate, driven by increasing demand for education and skills development.',
                'slug' => 'education',
                'icon' => 'fas fa-graduation-cap',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agriculture',
                'description' => 'Farming & agribusiness. Primary activities include farming, crop production, and livestock management. Key products are crops, livestock, and agricultural commodities. Business models include farming operations, agricultural processing, and commodity trading. Target customers are consumers, food processors, and retailers. Organizational structures include farms, agricultural cooperatives, and agribusiness companies. Regulations include agricultural regulations, food safety standards, and environmental regulations. Market trends include sustainable agriculture, precision farming, and vertical farming. Representative companies are John Deere, Bayer, and Cargill. Technology adoption is increasing, with digital transformation in farming and agribusiness. Growth potential is moderate, driven by global food demand and sustainable practices.',
                'slug' => 'agriculture',
                'icon' => 'fas fa-seedling',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Real Estate',
                'description' => 'Property & housing. Core functions include property development, sales, and management. Key products are residential properties, commercial properties, and land. Business models include real estate development, property management, and brokerage services. Target customers are individual consumers, businesses, and investors. Organizational structures include real estate developers, property management companies, and brokerage firms. Regulations include real estate regulations, zoning laws, and property taxes. Market trends include urban development, sustainable building, and proptech. Representative companies are CBRE Group, Jones Lang LaSalle, and Prologis. Technology adoption is increasing, with digital transformation in property management and sales. Growth potential is moderate, driven by urbanization and economic growth.',
                'slug' => 'real-estate',
                'icon' => 'fas fa-building',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hospitality & Tourism',
                'description' => 'Travel & accommodation. Primary activities include providing accommodation, food services, and travel experiences. Key services are hotels, restaurants, and travel agencies. Business models include hotel management, restaurant operations, and travel packages. Target customers are tourists, business travelers, and event attendees. Organizational structures include hotels, restaurants, and travel agencies. Regulations include hospitality regulations, food safety standards, and tourism policies. Market trends include experiential travel, sustainable tourism, and digital travel platforms. Representative companies are Marriott International, McDonald\'s, and Booking Holdings. Technology adoption is increasing, with digital transformation in hospitality and tourism. Growth potential is moderate, driven by tourism trends and economic growth.',
                'slug' => 'hospitality-tourism',
                'icon' => 'fas fa-hotel',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Media & Entertainment',
                'description' => 'Content & broadcasting. Core functions include content creation, distribution, and broadcasting. Key products are movies, TV shows, and music. Business models include advertising, subscription services, and content licensing. Target customers are consumers, advertisers, and content creators. Organizational structures include media companies, broadcasting networks, and production studios. Regulations include media regulations, copyright laws, and advertising standards. Market trends include streaming services, digital content, and social media. Representative companies are Disney, Netflix, and Comcast. Technology adoption is high, with digital transformation in media and entertainment. Growth potential is moderate, driven by digital content consumption and streaming services.',
                'slug' => 'media-entertainment',
                'icon' => 'fas fa-film',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Consumer Goods',
                'description' => 'Products for consumers. Primary activities include manufacturing, marketing, and distribution of consumer products. Key products are food, beverages, and household goods. Business models include mass production, brand management, and retail distribution. Target customers are individual consumers. Organizational structures include manufacturing companies, brand owners, and retail chains. Regulations include consumer protection laws, product safety standards, and advertising regulations. Market trends include sustainable products, personalized products, and e-commerce. Representative companies are Procter & Gamble, Nestlé, and Unilever. Technology adoption is increasing, with digital transformation in manufacturing and marketing. Growth potential is moderate, driven by consumer spending and product innovation.',
                'slug' => 'consumer-goods',
                'icon' => 'fas fa-box-open',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Professional Services',
                'description' => 'Consulting & legal. Core functions include providing expert advice, consulting services, and legal representation. Key services are management consulting, legal services, and accounting services. Business models include consulting fees, hourly rates, and retainer agreements. Target customers are businesses, government entities, and individual clients. Organizational structures include consulting firms, law firms, and accounting firms. Regulations include professional regulations, ethical standards, and legal compliance. Market trends include digital consulting, legal tech, and remote services. Representative companies are McKinsey & Company, Deloitte, and Kirkland & Ellis. Technology adoption is increasing, with digital transformation in service delivery and client management. Growth potential is moderate, driven by business complexity and regulatory requirements.',
                'slug' => 'professional-services',
                'icon' => 'fas fa-briefcase',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aerospace & Defense',
                'description' => 'Aviation & security. Primary activities include manufacturing aircraft, defense systems, and providing security services. Key products are aircraft, missiles, and cybersecurity solutions. Business models include government contracts, commercial sales, and service agreements. Target customers are government entities, airlines, and security agencies. Organizational structures include aerospace manufacturers, defense contractors, and security firms. Regulations include defense regulations, aviation safety standards, and export controls. Market trends include space exploration, cybersecurity, and autonomous systems. Representative companies are Boeing, Lockheed Martin, and Airbus. Technology adoption is high, with digital transformation in manufacturing and security. Growth potential is moderate, driven by defense spending and technological advancements.',
                'slug' => 'aerospace-defense',
                'icon' => 'fas fa-fighter-jet',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Environmental Services',
                'description' => 'Waste & sustainability. Core functions include waste management, recycling, and environmental consulting. Key services are waste collection, recycling, and environmental remediation. Business models include waste management contracts, recycling operations, and consulting fees. Target customers are businesses, government entities, and individual consumers. Organizational structures include waste management companies, recycling facilities, and environmental consulting firms. Regulations include environmental regulations, waste management standards, and recycling policies. Market trends include sustainable practices, circular economy, and waste reduction. Representative companies are Waste Management, Republic Services, and Veolia. Technology adoption is increasing, with digital transformation in waste management and recycling. Growth potential is moderate, driven by environmental concerns and sustainability initiatives.',
                'slug' => 'environmental-services',
                'icon' => 'fas fa-recycle',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biotechnology',
                'description' => 'Life sciences innovation. Primary activities include research, development, and manufacturing of biotechnological products. Key products are pharmaceuticals, diagnostics, and medical devices. Business models include research grants, product sales, and licensing agreements. Target customers are healthcare providers, pharmaceutical companies, and research institutions. Organizational structures include biotechnology companies, research labs, and pharmaceutical manufacturers. Regulations include FDA regulations, clinical trial standards, and patent laws. Market trends include personalized medicine, gene therapy, and biopharmaceuticals. Representative companies are Amgen, Genentech, and Moderna. Technology adoption is high, with digital transformation in research and development. Growth potential is strong, driven by healthcare innovation and pharmaceutical demand.',
                'slug' => 'biotechnology',
                'icon' => 'fas fa-dna',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nonprofit & NGOs',
                'description' => 'Charity & advocacy. Core functions include fundraising, advocacy, and providing social services. Key services are charitable programs, advocacy campaigns, and community outreach. Business models include donations, grants, and government funding. Target customers are beneficiaries, donors, and volunteers. Organizational structures include nonprofit organizations, NGOs, and charitable foundations. Regulations include nonprofit regulations, fundraising standards, and tax laws. Market trends include social impact investing, digital fundraising, and volunteer engagement. Representative companies are United Way, Red Cross, and Doctors Without Borders. Technology adoption is increasing, with digital transformation in fundraising and outreach. Growth potential is moderate, driven by social needs and philanthropic giving.',
                'slug' => 'nonprofit-ngos',
                'icon' => 'fas fa-hands-helping',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Category::insert($categories);
    }
}
