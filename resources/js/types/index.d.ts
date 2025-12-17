import { LucideIcon } from 'lucide-react';
import type { Config } from 'ziggy-js';

export interface Auth {
    user: User;
    roles: Role[];
}

export interface Role {
    id: number;
    name: string;
}


export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

export interface SharedData {
    name: string;
    phone: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;

    [key: string]: unknown;
}

export interface SearchData {
    search?: string;
    per_page?: number;
    page?: number;
    total?: number;
    from?: string;
    to?: string;
    month?: string;
    date?: string;
    daysInMonth?: number;
    role?: string;

    [key: string]: string | number; // Allow dynamic keys
}

export interface Link {
    active: string;
    label: string;
    url: string;
}

export interface UserPaginate {
    data: [
        User
    ];
    search: string;
    per_page: number;
    from: number;
    to: number;
    total: number;
    current_page: number;
    links: [Link];
}

export interface User {
    id: number;
    name: string;
    email: string;
    phone: string;
    address: string;
    comment?: string;
    password: string;
    balance: number;
    avatar: string;
    email_verified_at: string | null;
    user_topups?: UserTopUp[];
    roles?: Role[];

    [key: string]: unknown;
}

export interface Role {
    id: number;
    name: string;
    guard_name: string;
    created_at: string;
    updated_at: string;
}





