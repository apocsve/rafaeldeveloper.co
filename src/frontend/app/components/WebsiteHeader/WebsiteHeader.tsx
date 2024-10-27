// Usage: <WebsiteHeader navigationItems={navigationItems} />
// Description: This component is used to display the header of the website. It accepts an array of navigation items which are displayed as links in the header.

interface NavigationItem {
    id: number;
    label: string;
    path: string;
    target: string;
}

interface Properties {
    navigationItems: NavigationItem[];
}

export default function WebsiteHeader({ navigationItems }: Properties) {
    return (
        <header className="navbar is-primary">
            <div className="container">
                <div className="navbar-brand">
                    <a className="navbar-item" href="/">
                        <img src="/path/to/logo.png" alt="Company Logo" />
                    </a>
                    <div className="navbar-burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="navbarMenu" className="navbar-menu">
                    <div className="navbar-start">
                        {navigationItems.map((item) => (
                            <a key={item.id} className="navbar-item" href={item.path} target={item.target}>
                                {item.label}
                            </a>
                        ))}
                    </div>
                    <div className="navbar-end">
                        <a className="navbar-item" href="/contact">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </header>
    );
}