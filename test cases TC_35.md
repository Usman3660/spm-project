# **QA Test Cases \- NexusPOS Landing Page**

Jira Ticket: \[TC-35\]  
Component: Landing Page (index.php)

## **1\. Hero Section Tests**

| ID | Test Scenario | Steps to Execute | Expected Result | Priority |
| :---- | :---- | :---- | :---- | :---- |
| **TC-35.1** | **Verify Gradient Headline** | 1\. Load homepage 2\. Observe "Nexus Intelligence" text | Text should have a purple/blue gradient fill. | High |
| **TC-35.2** | **Verify Hero Pattern** | 1\. Inspect the background of the hero section | A subtle radial dot pattern should be visible on top of the gradient background. | Low |
| **TC-35.3** | **Verify 3D Mockup Image** | 1\. Scroll to hero image 2\. Check image source | Image loads from Unsplash. No broken link icon. | High |
| **TC-35.4** | **Verify Floating Badges** | 1\. Wait 3-4 seconds after load | "New Order" and "New Customer" badges should bob up and down (animate). | Medium |

## **2\. Navigation & Layout Tests**

| ID | Test Scenario | Steps to Execute | Expected Result | Priority |
| :---- | :---- | :---- | :---- | :---- |
| **TC-35.5** | **Mobile Menu Toggle** | 1\. Resize browser to \<768px 2\. Click Menu (Hamburger) icon | Mobile menu dropdown appears. | High |
| **TC-35.6** | **Smooth Scrolling** | 1\. Click "Features" in Navbar | Page smoothly scrolls down to \#features section. | Medium |
| **TC-35.7** | **Sticky Navbar** | 1\. Scroll down 100px | Navbar should stay fixed at top and become slightly transparent (glass effect). | Medium |

## **3\. Functionality Tests**

| ID | Test Scenario | Steps to Execute | Expected Result | Priority |
| :---- | :---- | :---- | :---- | :---- |
| **TC-35.8** | **Form Submission (Happy Path)** | 1\. Fill Name & Email 2\. Click "Request Demo" | Page reloads (or stays) and Green Success Toast appears at top right. | Critical |
| **TC-35.9** | **Form Validation** | 1\. Leave Email blank 2\. Click "Request Demo" | Browser should prevent submission and show "Please fill out this field" tooltip. | High |

## **4\. UI/Visual Tests**

| ID | Test Scenario | Steps to Execute | Expected Result | Priority |
| :---- | :---- | :---- | :---- | :---- |
| **TC-35.10** | **Pricing Cards Alignment** | 1\. Resize browser to mobile view | Pricing cards should stack vertically (1 column). | High |
| **TC-35.11** | **Pricing Pro Highlight** | 1\. Observe "Professional" card | Card should be slightly larger (scaled) with a border highlight. | Low |

