/*
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */


using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Runtime.Serialization;
using System.Text;
using System.Text.RegularExpressions;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Newtonsoft.Json.Linq;
using System.ComponentModel.DataAnnotations;
using FileParameter = Org.OpenAPITools.Client.FileParameter;
using OpenAPIDateConverter = Org.OpenAPITools.Client.OpenAPIDateConverter;
using OpenAPIClientUtils = Org.OpenAPITools.Client.ClientUtils;

namespace Org.OpenAPITools.Model
{
    /// <summary>
    /// QuadrilateralInterface
    /// </summary>
    [DataContract(Name = "QuadrilateralInterface")]
    public partial class QuadrilateralInterface : IEquatable<QuadrilateralInterface>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="QuadrilateralInterface" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected QuadrilateralInterface()
        {
            this.AdditionalProperties = new Dictionary<string, object>();
        }
        /// <summary>
        /// Initializes a new instance of the <see cref="QuadrilateralInterface" /> class.
        /// </summary>
        /// <param name="quadrilateralType">quadrilateralType (required).</param>
        public QuadrilateralInterface(string quadrilateralType = default(string))
        {
            // to ensure "quadrilateralType" is required (not null)
            if (quadrilateralType == null)
            {
                throw new ArgumentNullException("quadrilateralType is a required property for QuadrilateralInterface and cannot be null");
            }
            this.QuadrilateralType = quadrilateralType;
            this.AdditionalProperties = new Dictionary<string, object>();
        }

        /// <summary>
        /// Gets or Sets QuadrilateralType
        /// </summary>
        [DataMember(Name = "quadrilateralType", IsRequired = true, EmitDefaultValue = false)]
        public string QuadrilateralType { get; set; }

        /// <summary>
        /// Gets or Sets additional properties
        /// </summary>
        [JsonExtensionData]
        public IDictionary<string, object> AdditionalProperties { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class QuadrilateralInterface {\n");
            sb.Append("  QuadrilateralType: ").Append(QuadrilateralType).Append("\n");
            sb.Append("  AdditionalProperties: ").Append(AdditionalProperties).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return OpenAPIClientUtils.compareLogic.Compare(this, input as QuadrilateralInterface).AreEqual;
        }

        /// <summary>
        /// Returns true if QuadrilateralInterface instances are equal
        /// </summary>
        /// <param name="input">Instance of QuadrilateralInterface to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(QuadrilateralInterface input)
        {
            return OpenAPIClientUtils.compareLogic.Compare(this, input).AreEqual;
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.QuadrilateralType != null)
                {
                    hashCode = (hashCode * 59) + this.QuadrilateralType.GetHashCode();
                }
                if (this.AdditionalProperties != null)
                {
                    hashCode = (hashCode * 59) + this.AdditionalProperties.GetHashCode();
                }
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        public IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
