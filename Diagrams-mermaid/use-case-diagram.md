graph TD
    subgraph Anarchy Adventures System
        UC1[Register Account]
        UC2[Login to Account]
        UC3[Logout]
        UC4[View/Update Profile]
        UC5[Search/Browse Tour Packages]
        UC6[Filter Search Results]
        UC7[View Tour Package Details]
        UC8[Book Tour Package]
        UC9[(Simulate) Make Payment]
        UC10[View Booking History]
        UC11[Submit Inquiry/Feedback]
        UC12[View Static Pages]

        UA1[Login to Admin Panel]
        UA2[Admin Logout]
        UA3[Manage Admin Dashboard]
        UA4[Manage Tour Packages]
        UA5[Manage Destinations]
        UA6[Manage Tour Categories/Types]
        UA7[Manage Bookings]
        UA8[Manage Clients Accounts]
        UA9[Manage Website Content]
        UA10[View/Manage Clients Inquiries]
    end

    Clients --> UC1
    Clients --> UC2
    Clients --> UC3
    Clients --> UC4
    Clients --> UC5
    Clients --> UC6
    Clients --> UC7
    Clients --> UC8
    Clients --> UC9
    Clients --> UC10
    Clients --> UC11
    Clients --> UC12

    Administrator --> UA1
    Administrator --> UA2
    Administrator --> UA3
    Administrator --> UA4
    Administrator --> UA5
    Administrator --> UA6
    Administrator --> UA7
    Administrator --> UA8
    Administrator --> UA9
    Administrator --> UA10