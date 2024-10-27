import { json, MetaFunction } from "@remix-run/node";
import { useLoaderData } from "@remix-run/react";
import WebsiteHeader from "~/components/WebsiteHeader/WebsiteHeader";

interface NavigationItem {
  id: number;
  label: string;
  path: string;
  target: string;
}

export const meta: MetaFunction = () => {
  return [
    { title: "New Remix App" },
    { name: "description", content: "Welcome to Remix!" },
  ];
};

export async function loader() {
  const response = await fetch("http://rafaeldeveloper-backend:9000/api/v0/website/menu");
  const data = await response.json();
  return data.data;
}

export default function Index() {
  const navigationItems: NavigationItem[] = useLoaderData<typeof loader>();
  return (
    <WebsiteHeader navigationItems={navigationItems} />
  );
}