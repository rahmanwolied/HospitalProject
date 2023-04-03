import streamlit as st

st.set_page_config(page_title="Medicine Delivery with Drones", page_icon=":pill:", layout="wide")

st.title("Medicine Delivery with Drones")
st.write("Welcome to our website! We deliver medicines with drones to remote, underserved and Indigenous communities. Our drone delivery service is cost-effective and can fly long distances over dangerous terrains to deliver medication, vaccines, blood and other samples, and diagnostic kits.")

st.sidebar.title("Navigation")
menu = ["Home", "About Us", "Services", "Contact Us"]
choice = st.sidebar.selectbox("Select an option", menu)

if choice == "Home":
    st.write("## Home")
    st.write("This is the home page.")
elif choice == "About Us":
    st.write("## About Us")
    st.write("We are a team of professionals who are passionate about delivering essential health supplies to remote, underserved and Indigenous communities.")
elif choice == "Services":
    st.write("## Services")
    st.write("We offer the following services:")
    st.write("- Medication delivery")
    st.write("- Vaccine delivery")
    st.write("- Blood and other samples delivery")
    st.write("- Diagnostic kits delivery")
elif choice == "Contact Us":
    st.write("## Contact Us")
    st.write("You can contact us at:")
    st.write("- Email: info@medicinedeliverywithdrones.com")
    st.write("- Phone: +1 123-456-7890")